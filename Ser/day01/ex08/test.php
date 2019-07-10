#!/usr/bin/php
<?php
    include("ft_is_sort.php");
    $tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
    $tab[] = "Whatare we doing now ?";

    if (ft_is_sort($tab))
        echo "The array is sorted\n";
    else
        echo "The array is not sorted\n";

    if (ft_is_sort(["a", "b", "c", "d"]))
        echo ("The array is sorted\n");
    else
        echo ("The array is not sorted\n");

    if (ft_is_sort(["z", "h"]))
        echo ("The array is sorted\n");
    else
        echo ("The array is not sorted\n");

    if (ft_is_sort([]))
        echo ("The array is sorted\n");
    else
        echo ("The array is not sorted\n");

    if (ft_is_sort([12, 12, 12, 12]))
        echo ("The array is sorted\n");
    else
        echo ("The array is not sorted\n");

    if (ft_is_sort(["", 0, NULL, undefined]))
        echo ("The array is sorted\n");
    else
        echo ("The array is not sorted\n");
?>
