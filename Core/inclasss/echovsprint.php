<?php
    function countVietnameseWords($string) {
        // Tách chuỗi thành mảng các từ
        $words = explode(' ', $string);
    
        // Đếm số từ trong mảng
        $wordCount = count($words);
    
        return $wordCount;
    }
    
    // Ví dụ sử dụng hàm
    $string = "Xin chào! Tôi là một câu trong tiếng Việt.";
    $count = countVietnameseWords($string);
    echo "Số từ trong chuỗi: " . $count;
