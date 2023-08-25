<?php  error_reporting(E_ERROR); 

$pageNumber = 0; $pagesCount = 1; $confirmPage = false;
function GetFileFields() { return array(""); }
function GetSuccessMsg() { return "Your message has been sent successfully"; }
function GetFormTitle() { return "wbtech-contact"; }
function GetHeaderPanel() { return ""; }
function GetFooterPanel() { return ""; }
function GetLeftPanel() { return ""; }
function GetRightPanel() { return ""; }
function GetCountry($idx) { 
 $list = array('' => 'Unknown', '' => 'Select One', 'af' => 'Afghanistan', 'ax' => 'Aland Islands', 'al' => 'Albania', 'dz' => 'Algeria', 'as' => 'American Samoa', 'ad' => 'Andorra', 'ao' => 'Angola', 'ai' => 'Anguilla', 'aq' => 'Antarctica', 'ag' => 'Antigua and Barbuda', 'ar' => 'Argentina', 'am' => 'Armenia', 'aw' => 'Aruba', 'au' => 'Australia', 'at' => 'Austria', 'az' => 'Azerbaijan', 'bs' => 'Bahamas', 'bh' => 'Bahrain', 'bd' => 'Bangladesh', 'bb' => 'Barbados', 'by' => 'Belarus', 'be' => 'Belgium', 'bz' => 'Belize', 'bj' => 'Benin', 'bm' => 'Bermuda', 'bt' => 'Bhutan', 'bo' => 'Bolivia', 'ba' => 'Bosnia and Herzegovina', 'bw' => 'Botswana', 'bv' => 'Bouvet Island', 'br' => 'Brazil', 'io' => 'British Indian Ocean Territory', 'vg' => 'British Virgin Islands', 'bn' => 'Brunei', 'bg' => 'Bulgaria', 'bf' => 'Burkina Faso', 'bi' => 'Burundi', 'kh' => 'Cambodia', 'cm' => 'Cameroon', 'ca' => 'Canada', 'cv' => 'Cape Verde', 'ky' => 'Cayman Islands', 'cf' => 'Central African Republic', 'td' => 'Chad', 'cl' => 'Chile', 'cn' => 'China', 'cx' => 'Christmas Island', 'cc' => 'Cocos (Keeling) Islands', 'co' => 'Colombia', 'cg' => 'Congo', 'ck' => 'Cook Islands', 'cr' => 'Costa Rica', 'hr' => 'Croatia', 'cu' => 'Cuba', 'cy' => 'Cyprus', 'cz' => 'Czech Republic', 'cd' => 'Democratic Republic of Congo', 'dk' => 'Denmark', 'xx' => 'Disputed Territory', 'dj' => 'Djibouti', 'dm' => 'Dominica', 'do' => 'Dominican Republic', 'tl' => 'East Timor', 'ec' => 'Ecuador', 'eg' => 'Egypt', 'sv' => 'El Salvador', 'gq' => 'Equatorial Guinea', 'er' => 'Eritrea', 'ee' => 'Estonia', 'et' => 'Ethiopia', 'fk' => 'Falkland Islands', 'fo' => 'Faroe Islands', 'fm' => 'Federated States of Micronesia', 'fj' => 'Fiji', 'fi' => 'Finland', 'fr' => 'France', 'gf' => 'French Guyana', 'pf' => 'French Polynesia', 'tf' => 'French Southern Territories', 'ga' => 'Gabon', 'gm' => 'Gambia', 'ge' => 'Georgia', 'de' => 'Germany', 'gh' => 'Ghana', 'gi' => 'Gibraltar', 'gr' => 'Greece', 'gl' => 'Greenland', 'gd' => 'Grenada', 'gp' => 'Guadeloupe', 'gu' => 'Guam', 'gt' => 'Guatemala', 'gn' => 'Guinea', 'gw' => 'Guinea-Bissau', 'gy' => 'Guyana', 'ht' => 'Haiti', 'hm' => 'Heard Island and McDonald Islands', 'hn' => 'Honduras', 'hk' => 'Hong Kong', 'hu' => 'Hungary', 'is' => 'Iceland', 'in' => 'India', 'id' => 'Indonesia', 'ir' => 'Iran', 'iq' => 'Iraq', 'xe' => 'Iraq-Saudi Arabia Neutral Zone', 'ie' => 'Ireland', 'il' => 'Israel', 'it' => 'Italy', 'ci' => 'Ivory Coast', 'jm' => 'Jamaica', 'jp' => 'Japan', 'jo' => 'Jordan', 'kz' => 'Kazakhstan', 'ke' => 'Kenya', 'ki' => 'Kiribati', 'kw' => 'Kuwait', 'kg' => 'Kyrgyz Republic', 'la' => 'Laos', 'lv' => 'Latvia', 'lb' => 'Lebanon', 'ls' => 'Lesotho', 'lr' => 'Liberia', 'ly' => 'Libya', 'li' => 'Liechtenstein', 'lt' => 'Lithuania', 'lu' => 'Luxembourg', 'mo' => 'Macau', 'mk' => 'Macedonia', 'mg' => 'Madagascar', 'mw' => 'Malawi', 'my' => 'Malaysia', 'mv' => 'Maldives', 'ml' => 'Mali', 'mt' => 'Malta', 'mh' => 'Marshall Islands', 'mq' => 'Martinique', 'mr' => 'Mauritania', 'mu' => 'Mauritius', 'yt' => 'Mayotte', 'mx' => 'Mexico', 'md' => 'Moldova', 'mc' => 'Monaco', 'mn' => 'Mongolia', 'me' => 'Montenegro', 'ms' => 'Montserrat', 'ma' => 'Morocco', 'mz' => 'Mozambique', 'mm' => 'Myanmar', 'na' => 'Namibia', 'nr' => 'Nauru', 'np' => 'Nepal', 'an' => 'Netherlands Antilles', 'nl' => 'Netherlands', 'nc' => 'New Caledonia', 'nz' => 'New Zealand', 'ni' => 'Nicaragua', 'ne' => 'Niger', 'ng' => 'Nigeria', 'nu' => 'Niue', 'nf' => 'Norfolk Island', 'kp' => 'North Korea', 'mp' => 'Northern Mariana Islands', 'no' => 'Norway', 'om' => 'Oman', 'pk' => 'Pakistan', 'pw' => 'Palau', 'ps' => 'Palestinian Territories', 'pa' => 'Panama', 'pg' => 'Papua New Guinea', 'py' => 'Paraguay', 'pe' => 'Peru', 'ph' => 'Philippines', 'pn' => 'Pitcairn Islands', 'pl' => 'Poland', 'pt' => 'Portugal', 'pr' => 'Puerto Rico', 'qa' => 'Qatar', 're' => 'Reunion', 'ro' => 'Romania', 'ru' => 'Russia', 'rw' => 'Rwanda', 'sh' => 'Saint Helena and Dependencies', 'kn' => 'Saint Kitts &amp; Nevis', 'lc' => 'Saint Lucia', 'pm' => 'Saint Pierre and Miquelon', 'vc' => 'Saint Vincent and the Grenadines', 'ws' => 'Samoa', 'sm' => 'San Marino', 'st' => 'Sao Tome and Principe', 'sa' => 'Saudi Arabia', 'sn' => 'Senegal', 'rs' => 'Serbia', 'sc' => 'Seychelles', 'sl' => 'Sierra Leone', 'sg' => 'Singapore', 'sk' => 'Slovakia', 'si' => 'Slovenia', 'sb' => 'Solomon Islands', 'so' => 'Somalia', 'za' => 'South Africa', 'gs' => 'South Georgia and the South Sandwich Islands', 'kr' => 'South Korea', 'es' => 'Spain', 'pi' => 'Spratly Islands', 'lk' => 'Sri Lanka', 'sd' => 'Sudan', 'sr' => 'Suriname', 'sj' => 'Svalbard and Jan Mayen Islands', 'sz' => 'Swaziland', 'se' => 'Sweden', 'ch' => 'Switzerland', 'sy' => 'Syria', 'tw' => 'Taiwan', 'tj' => 'Tajikistan', 'tz' => 'Tanzania', 'th' => 'Thailand', 'tg' => 'Togo', 'tk' => 'Tokelau', 'to' => 'Tonga', 'tt' => 'Trinidad and Tobago', 'tn' => 'Tunisia', 'tr' => 'Turkey', 'tm' => 'Turkmenistan', 'tc' => 'Turks and Caicos Islands', 'tv' => 'Tuvalu', 'vi' => 'US Virgin Islands', 'ug' => 'Uganda', 'ua' => 'Ukraine', 'km' => 'Union of the Comoros', 'ae' => 'United Arab Emirates', 'uk' => 'United Kingdom', 'um' => 'United States Minor Outlying Islands', 'us' => 'United States', 'uy' => 'Uruguay', 'uz' => 'Uzbekistan', 'vu' => 'Vanuatu', 'va' => 'Vatican City', 've' => 'Venezuela', 'vn' => 'Vietnam', 'wf' => 'Wallis and Futuna Islands', 'eh' => 'Western Sahara', 'ye' => 'Yemen', 'zm' => 'Zambia', 'zw' => 'Zimbabwe');
 return $list[$idx]; }

function GetHobby($idx) { 
 $list = array('' => 'Unknown', '' => 'Select One', '1' => 'Automobiles', '2' => 'Business', '3' => 'Children', '4' => 'Computing', '5' => 'Consumers', '6' => 'Cooking', '54' => 'Dance', '7' => 'Education', '53' => 'Electronics', '9' => 'Entertainment', '10' => '  Gaming', '11' => '  Music', '57' => 'Fashion', '60' => 'Finance', '50' => 'Gift Shop', '55' => 'Guitar', '12' => 'Health', '13' => 'Hobbies', '14' => '  Animals', '15' => '  Animals Agenda', '16' => '  Art', '17' => '  Boating', '18' => '  Flying', '19' => '  Gardening', '20' => '  History', '21' => '  Photography', '22' => '  Travel', '23' => '  Woodworking', '59' => 'Hobby Modeling', '24' => 'Home', '58' => 'Lifestyle', '25' => 'Men', '26' => '  Men`s health', '27' => 'News', '28' => 'Other', '29' => 'Outdoors', '30' => 'People', '56' => 'Politics', '34' => 'Regional', '35' => 'Religion', '52' => 'Running', '44' => 'Sports', '36' => '  Baseball', '37' => '  Basketball', '38' => '  Bowling', '39' => '  Cycling', '40' => '  Diving', '41' => '  Extreme Sports', '42' => '  Fishing', '43' => '  Football', '45' => '  Golf', '46' => '  Hunting', '47' => '  Skiing', '48' => 'Women &amp; Teen', '49' => '  Teens');
 return $list[$idx]; }

function GetState($idx) { 
 $list = array('' => 'Unknown', '' => 'Select One', 'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas', 'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut', 'DE' => 'Delaware', 'DC' => 'District of Columbia', 'FL' => 'Florida', 'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois', 'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland', 'MA' => 'Massachusetts', 'MI' => 'Michigan', 'MN' => 'Minnesota', 'MS' => 'Mississippi', 'MO' => 'Missouri', 'MT' => 'Montana', 'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey', 'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina', 'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania', 'RI' => 'Rhode Island', 'SC' => 'South Carolina', 'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah', 'VT' => 'Vermont', 'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming');
 return $list[$idx]; }

function GetJob($idx) { 
 $list = array('' => 'Unknown', '' => 'Select One', '1' => 'Accounting', '2' => 'Administration', '3' => 'Advertising', '4' => 'Aerospace', '5' => 'Agriculture', '6' => 'Airlines', '7' => 'Architecture', '8' => 'Auditing', '9' => 'Automotive', '10' => 'Aviation', '11' => 'Aviation Engineering', '12' => 'Banking', '13' => 'Biomedical Engineering', '14' => 'Book keeping', '15' => 'Broadcasting', '16' => 'Chemical Engineering', '17' => 'Chemistry', '18' => 'Civil Engineering', '19' => 'Communication Engineering', '20' => 'Computer Education', '21' => 'Computer Hardware', '22' => 'Computer Software', '23' => 'Construction Engineering', '24' => 'Consultation', '25' => 'Control Engineering', '27' => 'Custodial/Janitorial', '28' => 'Customer Services', '113' => 'Data BAse Administration', '29' => 'Decoration', '30' => 'Dentistry', '31' => 'Driving', '32' => 'Dyeing', '33' => 'Electrical Engineering', '34' => 'Electronics', '35' => 'Engineering Management', '36' => 'Environmental', '37' => 'Environmental Engineering', '38' => 'Financial Management', '39' => 'Fire Prevention', '40' => 'Food Security', '41' => 'Graphics designing', '42' => 'Health', '43' => 'Home services', '44' => 'Hospitals', '45' => 'Hotel', '46' => 'Housing and Constructing', '47' => 'Human Resources', '48' => 'HVAC', '49' => 'Import &amp; Export', '52' => 'Information Technology (IT)', '50' => 'Industrial', '51' => 'Industrial Engineering', '53' => 'Insurance', '54' => 'Internet', '110' => 'Interior Design', '55' => 'Journalism', '56' => 'Law', '57' => 'Library', '58' => 'Logistics Manager', '59' => 'Maintenance/Repair', '60' => 'Management', '61' => 'Manufacturing &amp; production', '62' => 'Marketing', '63' => 'Mechanical Engineering', '64' => 'Media', '65' => 'Medical Services', '66' => 'Medicine', '67' => 'Metallurgy Engineering', '68' => 'Military', '69' => 'Multimedia', '70' => 'Networks Administration', '71' => 'Nursing', '72' => 'Petroleum Engineering', '73' => 'Pharmacy', '74' => 'Photography', '75' => 'Physics', '76' => 'Physiotherapy', '77' => 'Politics', '78' => 'Printing', '79' => 'Production Engineering', '80' => 'Public Relations', '111' => 'Purchasing', '82' => 'Quality Control', '81' => 'Quality Assurance', '83' => 'Rcreation', '84' => 'Research', '85' => 'Restaurants', '86' => 'Sales', '87' => 'Science', '88' => 'Secretarial', '89' => 'Security', '90' => 'Social services', '91' => 'Software Engneering', '92' => 'Sports', '93' => 'Structural Engineering', '112' => 'System Analysis', '94' => 'Teaching', '95' => 'Telecommunications', '96' => 'Telemarketing', '97' => 'Television', '98' => 'Textile Engineering', '99' => 'Tourism', '100' => 'Trade', '26' => 'Trading &amp; Contracting', '101' => 'Training', '102' => 'Translation', '103' => 'Transportation', '104' => 'Travel', '105' => 'Typist', '106' => 'Utilities', '107' => 'Veterinary Medicine', '108' => 'Word processing', '109' => 'Work from home', '0' => 'Other');
 return $list[$idx]; }

function GetJobType($idx) { 
 $list = array('' => 'Unknown', '' => 'Select One', '1' => 'Full Time', '2' => 'Part Time', '3' => 'Consultant', '4' => 'Intership', '5' => 'Temporary', '6' => 'Training');
 return $list[$idx]; }

function GetMarital($idx) { 
 $list = array('' => 'Unknown');
 return $list[$idx]; }

?>
<?php function GetSummary($includePrivate) {
 $block = 'SUBMISSION_TIME='.date('l jS, F Y h:i:s A')."\r\n";
$block .= "NAME=".trim($_POST['NAME_FIRST'].' '.$_POST['NAME_MIDDLE'].' '.$_POST['NAME_LAST'])."\r\n";
$block .= "EMAIL=".trim($_POST['EMAIL'])."\r\n";
$block .= "SUBJECT=".trim($_POST['SUBJECT'])."\r\n";
$block .= "MESSAGE=".trim($_POST['MESSAGE'])."\r\n";
return $block;
 } ?>
<?php function GetCsvLine($includePrivate) {
 $block = '"'.date('l jS, F Y h:i:s A').'"';
$block .= ',"'.trim($_POST['NAME_FIRST'].' '.$_POST['NAME_MIDDLE'].' '.$_POST['NAME_LAST']).'"';
$block .= ',"'.trim($_POST['EMAIL']).'"';
$block .= ',"'.trim($_POST['SUBJECT']).'"';
$block .= ',"'.trim($_POST['MESSAGE']).'"';
return $block."\n";
 } ?>
<?php function ValidateFields() {
 global $pageNumber, $pagesCount;
 $isValid = false; $isBlockValid = true;
if (((isset($_POST['NAME_FIRST']) && strlen(trim($_POST['NAME_FIRST'])) > 0) ? IsValidString($_POST['NAME_FIRST']) : false)
 || ((isset($_POST['NAME_MIDDLE']) && strlen(trim($_POST['NAME_MIDDLE'])) > 0) ? IsValidString($_POST['NAME_MIDDLE']) : false)
 || ((isset($_POST['NAME_LAST']) && strlen(trim($_POST['NAME_LAST'])) > 0) ? IsValidString($_POST['NAME_LAST']) : false)) { unset($GLOBALS['NAME_invalid_flag']);
} else { DeleteUpload("", "NAME");
 $GLOBALS['NAME_invalid_flag'] = 1;
 unset($_SESSION['NAME_uploaded']);
 unset($_SESSION['NAME_upload_name']);
 $isBlockValid = false;
 }
if ((isset($_POST['EMAIL']) && strlen(trim($_POST['EMAIL'])) > 0) ? IsValidEmail($_POST['EMAIL']) : false) {
 unset($GLOBALS['EMAIL_invalid_flag']);
} else { DeleteUpload("", "EMAIL");
 $GLOBALS['EMAIL_invalid_flag'] = 1;
 unset($_SESSION['EMAIL_uploaded']);
 unset($_SESSION['EMAIL_upload_name']);
 $isBlockValid = false;
 }
if ((isset($_POST['SUBJECT']) && strlen(trim($_POST['SUBJECT'])) > 0) ? IsValidString($_POST['SUBJECT']) : false) {
 unset($GLOBALS['SUBJECT_invalid_flag']);
} else { DeleteUpload("", "SUBJECT");
 $GLOBALS['SUBJECT_invalid_flag'] = 1;
 unset($_SESSION['SUBJECT_uploaded']);
 unset($_SESSION['SUBJECT_upload_name']);
 $isBlockValid = false;
 }
if ((isset($_POST['MESSAGE']) && strlen(trim($_POST['MESSAGE'])) > 0) ? IsValidString($_POST['MESSAGE']) : false) {
 unset($GLOBALS['MESSAGE_invalid_flag']);
} else { DeleteUpload("", "MESSAGE");
 $GLOBALS['MESSAGE_invalid_flag'] = 1;
 unset($_SESSION['MESSAGE_uploaded']);
 unset($_SESSION['MESSAGE_upload_name']);
 $isBlockValid = false;
 }
return $isBlockValid; } ?>
<?php function DoSubmit() {
SendEmailWithFiles($_POST['EMAIL'], 'wbtechsolutionsinfo@gmail.com', 'Form submitted', GetSummary(true));
SendEmail('wbtechsolutionsinfo@gmail.com', $_POST['EMAIL'], 'Form submitted', 'Thank you. We will connect you shortly');
} ?>
<?php function DisplayConfirmation() {
GenerateNameField("Full Name", "NAME");
GeneratePlainField("Email", "EMAIL");
GeneratePlainField("Subject", "SUBJECT");
GeneratePlainField("Message", "MESSAGE");
} ?>
<?php

$formgen_action_back = false;
$formgen_action_next = false;
$formgen_action_submit = false;
$formgen_action_confirm = false;
$formgen_page_validated = false;

session_start();

function IsValidEmail($email)
{
	return preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email);
}

function IsValidZIP($zip)
{
	return preg_match("/^[0-9]{3,5}$/i", $zip);
}

function IsValidURL($url)
{
	return preg_match("#^http(s)?://[a-z0-9-_.]+\.[a-z]{2,4}#i", $url);
}

function IsValidPhone($phone)
{
	return preg_match("/^[0-9]{7,11}$/i", $phone);
}

function IsValidSSN($ssn)
{
	return preg_match("/^[\d]{9}$/", $ssn);
}

function IsValidDate($date)
{
	if (preg_match("/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/", $date, $parts))
		return checkdate($parts[1], $parts[2], $parts[3]);
	else
		return false;
}

function IsValidFile($fileName)
{
	return ($_FILES[$fileName]["error"] === UPLOAD_ERR_OK);
}

function IsValidFileSize($fileName, $maxSize)
{
	return (($maxSize == 0) || $_FILES[$fileName]["size"] <= $maxSize);
}

function IsValidImage($imageName)
{
	if (!IsValidFile($imageName))
		return false;
		
	return (strcasecmp(substr($_FILES[$imageName]["type"], 0, 6), "image/") == 0);
}

function IsValidAudio($audioName)
{
	if (!IsValidFile($audioName))
		return false;
		
	return (strcasecmp(substr($_FILES[$audioName]["type"], 0, 6), "audio/") == 0);
}

function IsValidVideo($videoName)
{
	if (!IsValidFile($videoName))
		return false;
		
	return (strcasecmp(substr($_FILES[$videoName]["type"], 0, 6), "video/") == 0);
}

function IsValidDocument($docName)
{
	if (!IsValidFile($docName))
		return false;
	
	switch ($_FILES[$docName]["type"])
	{
		case "application/msword":
		case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
		case "application/vnd.ms-excel":
		case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
		case "application/pdf";
			return true;
		default:
			return (strcasecmp(substr($_FILES[$docName]["type"], 0, 5), "text/") == 0);
	}
}

function IsValidArchive($archiveName)
{
	if (!IsValidFile($archiveName))
		return false;
	
	switch ($_FILES[$archiveName]["type"])
	{
		case "application/zip":
		case "application/rar":
		case "application/7z":
		case "application/x-zip":
		case "application/x-rar":
		case "application/x-7z":
		case "application/x-zip-compressed":
		case "application/x-7z-compressed":
		case "application/x-rar-compressed":
			return true;
		default:
			return false;
	}
}

function IsValidString($str)
{
	return strlen(trim($str)) > 0;
}

function IsValidCheckbox($fieldName, $optionsCount)
{
	for ($i = 0; $i < $optionsCount; $i++)
		if (isset($_POST[$fieldName.'_'.$i]))
			return true;

	return false;
}


if(!function_exists('mime_content_type'))
{
	function mime_content_type($filename)
	{
		$mime_types = array
		(
			'txt' => 'text/plain',
			'htm' => 'text/html',
			'html' => 'text/html',
			'php' => 'text/html',
			'css' => 'text/css',
			'js' => 'application/javascript',
			'json' => 'application/json',
			'xml' => 'application/xml',
			'swf' => 'application/x-shockwave-flash',
			'flv' => 'video/x-flv',
			// images
			'png' => 'image/png',
			'jpe' => 'image/jpeg',
			'jpeg' => 'image/jpeg',
			'jpg' => 'image/jpeg',
			'gif' => 'image/gif',
			'bmp' => 'image/bmp',
			'ico' => 'image/vnd.microsoft.icon',
			'tiff' => 'image/tiff',
			'tif' => 'image/tiff',
			'svg' => 'image/svg+xml',
			'svgz' => 'image/svg+xml',
			// archives
			'zip' => 'application/zip',
			'rar' => 'application/x-rar-compressed',
			'exe' => 'application/x-msdownload',
			'msi' => 'application/x-msdownload',
			'cab' => 'application/vnd.ms-cab-compressed',
			// audio/video
			'mp3' => 'audio/mpeg',
			'qt' => 'video/quicktime',
			'mov' => 'video/quicktime',
			// adobe
			'pdf' => 'application/pdf',
			'psd' => 'image/vnd.adobe.photoshop',
			'ai' => 'application/postscript',
			'eps' => 'application/postscript',
			'ps' => 'application/postscript',
			// ms office
			'doc' => 'application/msword',
			'rtf' => 'application/rtf',
			'xls' => 'application/vnd.ms-excel',
			'ppt' => 'application/vnd.ms-powerpoint',
			// open office
			'odt' => 'application/vnd.oasis.opendocument.text',
			'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
		);

		$arr = explode('.',$filename);
		$ext = strtolower(array_pop($arr));
		if (array_key_exists($ext, $mime_types))
			return $mime_types[$ext];
		elseif (function_exists('finfo_open'))
		{
			$finfo = finfo_open(FILEINFO_MIME);
			$mimetype = finfo_file($finfo, $filename);
			finfo_close($finfo);
			return $mimetype;
		}
		else
			return 'application/octet-stream';
	}
}

function MakeDirectory($dir, $mode)
{
	if (is_dir($dir) || @mkdir($dir, $mode))
		return TRUE;
	if (!MakeDirectory(dirname($dir), $mode))
		return FALSE;
		
	return @mkdir($dir, $mode);
}

function GetSafePathName($fileName, $create)
{
	$safeName = trim(preg_replace("[^a-zA-Z0-9.-_/]", "_", $fileName));
	if (strlen($safeName) == 0)
		return "";
		
	if ($create && !file_exists($fileName))
		MakeDirectory($safeName, 0755);
		
	return $safeName;
}

function GetSafeFileName($fileName)
{
	return preg_replace("[^a-zA-Z0-9.-_]", "_", $fileName);
}

function GetSafeFileSpec($fileName, $createDir)
{
	$dir = realpath(dirname(GetSafePathName($fileName, false)));
	if ($createDir && !file_exists($dir))
		MakeDirectory($dir, 0755);
	
	return $dir.'/'.GetSafeFileName(basename($fileName));
}

function RecreateSession()
{
	foreach ($_SESSION as $x => $y)
		unset ($_SESSION[$x]);
	
	$_SESSION = array();
	
	if (isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time()-42000, '/');

	session_unset();
	session_destroy();
	session_regenerate_id();
	session_start();
}

function GetUploadedFileName($location, $fieldName)
{
	$idx = $fieldName.'_upload_name';
	if (!isset($_SESSION[$idx]))
		return "";

	$path = GetSafePathName($location, true);
	if (strlen($path) > 0 && substr($path, -1) != "/")
		$path .= "/";
		
	return $path.GetSafeFileName(session_id().'_'.$fieldName.'_'.$_SESSION[$idx]);
}

function GenerateUploadFileName($location, $fieldName)
{
	if (!isset($_FILES[$fieldName]))
		return "";
	
	$path = GetSafePathName($location, true);
	if (strlen($path) > 0 && substr($path, -1) != "/")
		$path .= "/";

	$i = 1;
	$fullPath = $path.GetSafeFileName(session_id().'_'.$fieldName.'_'.$_FILES[$fieldName]['name']);
	while (is_dir($fullPath) && $i++)
		$fullPath = $path.$i.GetSafeFileName(session_id().'_'.$fieldName.'_'.$_FILES[$fieldName]['name']);
	
	return $fullPath;
}

function DeleteUpload($location, $fieldName)
{
	if (isset($_SESSION[$fieldName.'_upload_name']))
	{
		$fileName = GetUploadedFileName($location, $fieldName);
		if (file_exists($fileName))
			unlink($fileName);
		
		unset($_SESSION[$fieldName.'_uploaded']);
		unset($_SESSION[$fieldName.'_upload_name']);
	}
}

function GetValuesList($fieldName, $optionsCount)
{
	$retValue = "";
	
	for ($i = 0; $i < $optionsCount; $i++)
	{
		$optionName = $fieldName.'_'.$i;
		if (isset($_POST[$optionName]) && strlen(trim($_POST[$optionName])) > 0)
		{
			if (strlen($retValue) > 0)
				$retValue = $retValue.', ';
			$retValue = $retValue.$_POST[$optionName];
		}
	}
	return $retValue;
}

function GetValuesArray($fieldName)
{
	$retValue = "";
	if (isset($_POST[$fieldName]))
	{
		$cnt = count($_POST[$fieldName]);
		for ($i = 0; $i < $cnt; $i++)
		{
			if (strlen($retValue) > 0)
				$retValue = $retValue.', ';
			$retValue = $retValue.$_POST[$fieldName][$i];
		}
	}
	return $retValue;
}

function GetUploadedFiles()
{
	$files = GetFileFields();
	for ($i = 0; $i < count($files); $i++)
	{
		$fileName = "";
		$filePath = "";
		if (isset($_SESSION[$files[$i].'_full_path']) && isset($_SESSION[$files[$i].'_upload_name']))
		{
			$fileName = $_SESSION[$files[$i].'_upload_name'];
			$filePath = $_SESSION[$files[$i].'_full_path'];
		}
		$files[$i] = array("name" => $fileName, "path" => $filePath);
	}
	return $files;
}

function SendEmail($from, $to, $subject, $body)
{
	$headers = (strlen(trim($from)) == 0) ? "" : "From: ".$from."\r\nReply-To: ".$from;
	$mail_sent = @mail($to, $subject, $body, $headers);
}

function SendEmailWithFiles($from, $to, $subject, $body)
{
	$boundary = "==Multipart_Boundary_".md5(date('r', time()));

	$headers = (strlen(trim($from)) == 0) ? "" : "From: ".$from."\nReply-To: ".$from."\n";
	$headers .= "MIME-Version: 1.0\nContent-Type: multipart/mixed;\n boundary=\"".$boundary."\"";
	
	$message = "ZZZ \n\n--".$boundary."\n";
	$message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
	$message .= "Content-Transfer-Encoding: 7bit\n\n";
	$message .= $body;
	//$message .= "\n\n--".$boundary."\n";
	
	$files = GetUploadedFiles();
	foreach($files as $key => $attachFile)
	{
		if (file_exists($attachFile["path"]))
		{
			$message .= "\n\n--".$boundary."\n";
			$message .= "Content-Type: ".mime_content_type($attachFile["path"])."; name=\"".$attachFile["name"]."\"\n";
			$message .= "Content-Disposition: attachment\n";
			$message .= "Content-Transfer-Encoding: base64\n\n";
			$message .= chunk_split(base64_encode(file_get_contents($attachFile["path"])));
		}
	}

	$mail_sent = @mail($to, $subject, $message, $headers);
}

function GenerateSubmitButton()
{
	global $pageNumber, $pagesCount, $confirmPage;
	global $formgen_action_submit, $formgen_action_confirm;
	global $formgen_page_validated;
	
	if ($formgen_action_submit && $formgen_page_validated)
		return; // already submitted. no button needed
	
	$showConfirm = ($formgen_action_confirm && $formgen_page_validated && ($pageNumber == $pagesCount));
	if ($pagesCount > 1 || $showConfirm)
	{
		echo '<tr><td colspan="3"><table align="right"><tr>';
		if ($pageNumber > 0)
			echo '<td><input type="submit" class="btn_half" name="formgen_submit" value="Back" /></td>';
			
		if ($pageNumber == $pagesCount)
			$action = "Submit";
		else if ($pageNumber == ($pagesCount - 1))
			$action = $confirmPage ? 'Confirm' : 'Submit';
		else
			$action = 'Next';
			
		echo '<td><input type="submit" class="btn_half" name="formgen_submit" value="'.$action.'"/></td></tr></table></td></tr>';
	}
	else
	{
		if ($confirmPage)
			$action = 'Confirm';
		else
			$action = 'Submit';
		
		echo '<tr><td colspan="3"><input type="submit" class="btn" name="formgen_submit" value="'.$action.'" /></td></tr>';
	}
}

function GenerateField($fieldCaption, $fieldValue)
{
	echo '<tr><td><div class="caption_fields"><b>'.$fieldCaption.":&nbsp;</b></div></td>";
	echo '<td colspan="2"><div class="caption_fields">'.$fieldValue."</div></td></tr>\n";
}

function GeneratePlainField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? $_POST[$fieldName] : '');
}

function GenerateCountryField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? GetCountry($_POST[$fieldName]) : '');
}

function GenerateStateField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? GetState($_POST[$fieldName]) : '');
}

function GenerateHobbyField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? GetHobby($_POST[$fieldName]) : '');
}

function GenerateJobField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? GetJob($_POST[$fieldName]) : '');
}

function GenerateJobTypeField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_POST[$fieldName]) ? GetJobType($_POST[$fieldName]) : '');
}

function GenerateNameField($fieldCaption, $fieldName)
{
	$fullName = (isset($_POST[$fieldName.'_FIRST']) ? $_POST[$fieldName.'_FIRST'] : '').' '.
				(isset($_POST[$fieldName.'_MIDDLE']) ? $_POST[$fieldName.'_MIDDLE'] : '').' '.
				(isset($_POST[$fieldName.'_LAST']) ? $_POST[$fieldName.'_LAST'] : '');
	
	GenerateField($fieldCaption, $fullName);
}

function GenerateArrayField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, GetValuesArray($fieldName));
}

function GenerateListField($fieldCaption, $fieldName, $itemsCount)
{
	GenerateField($fieldCaption, GetValuesList($fieldName, $itemsCount));
}

function GenerateFileField($fieldCaption, $fieldName)
{
	GenerateField($fieldCaption, isset($_SESSION[$fieldName.'_upload_name']) ? $_SESSION[$fieldName.'_upload_name'] : '');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formgen_submit']))
{
	if (isset($_POST['NAME']))
		$userName = trim($_POST['NAME']);
	
	if (isset($_POST['formgen_page_number']))
		$pageNumber = intval($_POST['formgen_page_number']);
	
	if (strcasecmp($_POST['formgen_submit'], "Back") == 0)
		$formgen_action_back = true;
	else if (strcasecmp($_POST['formgen_submit'], "Next") == 0)
		$formgen_action_next = true;	
	else if (strcasecmp($_POST['formgen_submit'], "Submit") == 0)
		$formgen_action_submit = true;
	else if (strcasecmp($_POST['formgen_submit'], "Confirm") == 0)
		$formgen_action_confirm = true;
	
	if ($formgen_action_back)
	{
		$pageNumber--;
		if ($pageNumber < 0)
			$pageNumber = 0;
	}
	else
	{
		$formgen_page_validated = ValidateFields();
		if ($formgen_page_validated)
		{
			if ($formgen_action_next)
			{
				$pageNumber++;
				if ($pageNumber >= $pagesCount)
					$pageNumber = $pagesCount - 1;
			}
			else if ($formgen_action_submit || $formgen_action_confirm)
			{
				$pageNumber = $pagesCount;
			}
		}
	}
}
else
{
	RecreateSession();
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>wbtech-contact</title><style type="text/css">
body {
}

.center_window {
}

.header {
}

.header_text {
}

.content {
}

.form_title {
}

.description_form {
}

.border_form {
}

.td_width {
}

.caption_fields {
}

.input_width1 {
}

.input_width {
}

.error_message {
}

.btn {
}

.footer {
}

.txt_footer {
}

.confirmation_messages {
}


.hidden_page_field { visibility: collapse; display: none; }
.invisible_page_field { visibility: hidden; }
</style>
<script type="text/javascript">
function addUpload(elmName)
{
	var newDiv = document.createElement('div');
	newDiv.innerHTML = "<input type='file' class='input_width' name='" + elmName + "'>";
	var parent = document.getElementById(elmName + '_div_id');
	var child = document.getElementById(elmName + '_delete_div');
	
	parent.removeChild(child);
	parent.appendChild(newDiv);
}
</script>
</head>
<body><div class="center_window">
<div class="header"><div class="header_text"></div></div>
<div class="content"><div class="form_title">wbtech-contact</div>
<form class="border_form" method="POST" enctype="multipart/form-data" action="">
<table>
<tr <?php if ($pageNumber != 0) echo "class=\"hidden_page_field\""; ?> ><td class="td_width"><div class="error_message"><?php if (isset($NAME_invalid_flag)) echo "Invalid Value"; ?></div><div class="caption_fields">First Name</div>
<input type="text" class="input_width1" name="NAME_FIRST" value="<?php if (isset($_POST['NAME_FIRST']) && strlen(trim($_POST['NAME_FIRST'])) > 0) echo $_POST['NAME_FIRST']; else echo ""; ?>" /></td>
<td class="td_width"><div class="error_message"><?php if (isset($NAME_invalid_flag)) echo "Invalid Value"; ?></div><div class="caption_fields">Middle Name</div>
<input type="text" class="input_width1" name="NAME_MIDDLE" value="<?php if (isset($_POST['NAME_MIDDLE']) && strlen(trim($_POST['NAME_MIDDLE'])) > 0) echo $_POST['NAME_MIDDLE']; else echo ""; ?>" /></td>
<td class="td_width"><div class="error_message"><?php if (isset($NAME_invalid_flag)) echo "Invalid Value"; ?></div><div class="caption_fields">Last Name</div>
<input type="text" class="input_width1" name="NAME_LAST" value="<?php if (isset($_POST['NAME_LAST']) && strlen(trim($_POST['NAME_LAST'])) > 0) echo $_POST['NAME_LAST']; else echo ""; ?>" />
</td></tr>

<tr <?php if ($pageNumber != 0) echo "class=\"hidden_page_field\""; ?> ><td  colspan="3"><div class="caption_fields">Email</div><div class="error_message"><?php if (isset($EMAIL_invalid_flag)) echo "Invalid Value"; ?></div><input type="text" class="input_width" name="EMAIL" value="<?php if (isset($_POST['EMAIL']) && strlen(trim($_POST['EMAIL'])) > 0) echo $_POST['EMAIL']; else echo ""; ?>" />
</td></tr>

<tr <?php if ($pageNumber != 0) echo "class=\"hidden_page_field\""; ?> ><td  colspan="3"><div class="caption_fields">Subject</div><div class="error_message"><?php if (isset($SUBJECT_invalid_flag)) echo "Invalid Value"; ?></div><input type="text" class="input_width" name="SUBJECT" value="<?php if (isset($_POST['SUBJECT']) && strlen(trim($_POST['SUBJECT'])) > 0) echo $_POST['SUBJECT']; else echo ""; ?>" />
</td></tr>

<tr <?php if ($pageNumber != 0) echo "class=\"hidden_page_field\""; ?> ><td  colspan="3"><div class="caption_fields">Message</div><div class="error_message"><?php if (isset($MESSAGE_invalid_flag)) echo "Invalid Value"; ?></div><textarea class="input_width" name="MESSAGE"><?php if (isset($_POST['MESSAGE']) && strlen(trim($_POST['MESSAGE'])) > 0) echo $_POST['MESSAGE']; else echo ""; ?></textarea>
</td></tr>

<?php

if ($formgen_page_validated && ($pageNumber == $pagesCount))
{
	if ($formgen_action_confirm)
	{
		DisplayConfirmation();
	}
	else if ($formgen_action_submit)
	{
		DoSubmit();
		echo '<div class="form_title">'.GetSuccessMsg().'</div>';
	}
}

?>

<?php GenerateSubmitButton(); ?>
</table></form>
</div>
<div class="footer"><div class="txt_footer"></div></div>
</div></body>
</html>
