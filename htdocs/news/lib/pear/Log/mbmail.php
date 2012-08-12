<?php
/**
 * $Header: /repository/pear/Log/Log/mail.php,v 1.21 2004/01/19 08:02:40 jon Exp $
 *
 * @version $Revision: 4 $
 * @package Log
 */

/**
 * The Log_mail class is a concrete implementation of the Log:: abstract class
 * which sends log messages to a mailbox.
 * The mail is actually sent when you close() the logger, or when the destructor
 * is called (when the script is terminated).
 * 
 * PLEASE NOTE that you must create a Log_mail object using =&, like this :
 *  $logger =& Log::factory("mail", "recipient@example.com", ...)
 * 
 * This is a PEAR requirement for destructors to work properly.
 * See http://pear.php.net/manual/en/class.pear.php
 * 
 * @author  Ronnie Garcia <ronnie@mk2.net>
 * @author  Jon Parise <jon@php.net>
 * @since   Log 1.3
 * @package Log
 *
 * @example mail.php    Using the mail handler.
 */
include_once("Log/mail.php");
class Log_mbmail extends Log_mail
{
    /**
     * Constructs a new Log_mail object.
     * 
     * Here is how you can customize the mail driver with the conf[] hash :
     *   $conf['from']    : the mail's "From" header line,
     *   $conf['subject'] : the mail's "Subject" line.
     * 
     * @param string $name      The filename of the logfile.
     * @param string $ident     The identity string.
     * @param array  $conf      The configuration array.
     * @param int    $level     Log messages up to and including this level.
     * @access public
     */
    function Log_mbmail($name, $ident = '', $conf = array(),
                      $level = PEAR_LOG_DEBUG)
    {
        $this->_id = md5(microtime());
        $this->_recipient = $name;
        $this->_ident = $ident;
        $this->_mask = Log::UPTO($level);

        if (!empty($conf['from'])) {
            $this->_from = $conf['from'];
        } else {
            $this->_from = ini_get('sendmail_from');
        }
        
        if (!empty($conf['subject'])) {
            $this->_subject = $conf['subject'];
        }

        if (!empty($conf['preamble'])) {
            $this->_preamble = $conf['preamble'];
        }
        
        /* register the destructor */
        register_shutdown_function(array(&$this, '_Log_mbmail'));
    }
    
    /**
     * Destructor. Calls close().
     *
     * @access private
     */
    function _Log_mbmail()
    {
        $this->close();
    }

    /**
     * Closes the message, if it is open, and sends the mail.
     * This is implicitly called by the destructor, if necessary.
     * 
     * @access public
     */
    function close()
    {
        if ($this->_opened) {
            if (!empty($this->_message)) {
                $headers = "From: $this->_from\n";
                $headers .= "User-Agent: Log_mail";

                if (mb_send_mail($this->_recipient, $this->_subject, $this->_message,
                         $headers) == false) {
                    error_log("Log_mail: Failure executing mail()", 0);
                    return false;
                }

                /* Clear the message string now that the email has been sent. */
                $this->_message = '';
            }
            $this->_opened = false;
        }

        return ($this->_opened === false);
    }
}

?>
