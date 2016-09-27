<?php
class Utils extends CApplicationComponent{
	
	private $_guid=null;
        private $_password = null;
	
	public function getGuid($namespace = ''){
		
		static $guid = '';
		$uid = uniqid("", true);
		$data = $namespace;
		$data .= $_SERVER['REQUEST_TIME'];
		$data .= $_SERVER['HTTP_USER_AGENT'];
		$data .= $_SERVER['SERVER_ADDR'];
		$data .= $_SERVER['SERVER_PORT'];
		$data .= $_SERVER['REMOTE_ADDR'];
		$data .= $_SERVER['REMOTE_PORT'];
		$hash = strtolower(hash('ripemd128', $uid . $guid . md5($data)));
		$this->_guid= substr($hash,  0,  8) .
				'-' .
				substr($hash,  8,  4) .
				'-' .
				substr($hash, 12,  4) .
				'-' .
				substr($hash, 16,  4) .
				'-' .
				substr($hash, 20, 12);
		
		return $this->_guid;
		
		
		
	}
        
        public function generatePassword ($length = 8) 
        {

            // start with a blank password
            $this->_password = "";  

            // define possible characters - any character in this string can be
            // picked for use in the password, so if you want to put vowels back in
            // or add special characters such as exclamation marks, this is where
            // you should do it
            $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

            // we refer to the length of $possible a few times, so let's grab it now
            $maxlength = strlen($possible);

            // check for length overflow and truncate if necessary
            if ($length > $maxlength) {
            $length = $maxlength;
            }

            // set up a counter for how many characters are in the password so far
            $i = 0; 

            // add random characters to $password until $length is reached
            while ($i < $length) { 

            // pick a random character from the possible ones
            $char = substr($possible, mt_rand(0, $maxlength-1), 1);

            // have we already used this character in $password?
            if (!strstr($this->_password, $char)) { 
                // no, so it's OK to add it onto the end of whatever we've already got...
                $this->_password .= $char;
                // ... and increase the counter by one
                $i++;
            }

            }

            // done!
            return $this->_password;

        }
	
}