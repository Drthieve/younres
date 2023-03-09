<?php 
// fonction pour retourner la date en français ou en anglais
function getDateFormatted($lang = null) {
    $dayOfWeek = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $monthOfYear = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $dayOfWeekFr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
    $monthOfYearFr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
    
    if($lang == 'en') {
        return date("l, F j, Y");
    } elseif($lang == 'fr') {
        $date = $dayOfWeekFr[date('w')].' '.date('j').' '.$monthOfYearFr[date('n')-1].' '.date('Y');
        return $date;
    } else {
        $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if($browserLang == 'fr') {
            $date = $dayOfWeekFr[date('w')].' '.date('j').' '.$monthOfYearFr[date('n')-1].' '.date('Y');
            return $date;
        } else {
            return date("l, F j, Y");
        }
    }
}
function get_navigateur() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($user_agent, 'Firefox') !== false) {
        return 'Mozilla Firefox';
    } elseif (strpos($user_agent, 'Chrome') !== false) {
        return 'Google Chrome';
    } elseif (strpos($user_agent, 'Safari') !== false) {
        return 'Apple Safari';
    } elseif (strpos($user_agent, 'Edge') !== false) {
        return 'Microsoft Edge';
    } elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident/') !== false) {
        return 'Internet Explorer';
    } else {
        return 'Inconnu';
    }
}
?>