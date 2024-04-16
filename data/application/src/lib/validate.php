<?php

function isDateValid($input) {
    // Регулярное выражение для проверки формата "число-месяц-год"
    $pattern = '/^\d{1,2}-\w{3,9}-\d{4}$/';

    // Проверка соответствия введенной строки регулярному выражению
    if (preg_match($pattern, $input)) {
        // Разбиваем строку на части по разделителям "-"
        list($day, $month, $year) = explode('-', $input);

        // Проверяем, является ли месяц числом от 1 до 12
        if (in_array($month, range(1, 12))) {
            // Проверяем, является ли год четырехзначным
            if (strlen($year) === 4) {
                // Проверяем, является ли день месяца числом от 1 до 31
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                return ($day >= 1 && $day <= $daysInMonth);
            } else {
                // Если год двухзначный, то он должен быть больше или равен 70
                return ($year >= 70 || ($year >= 69 && $year <= 99));
            }
        }
    }

    // Если какое-то из условий не выполнено, возвращаем false
    return false;
}









//if (isDateValid($inputData)) {
//    echo "TRUE";
//} else {
//    echo "FALSE";
//}
