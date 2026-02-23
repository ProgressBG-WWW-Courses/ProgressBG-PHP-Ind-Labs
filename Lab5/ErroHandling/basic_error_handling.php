<?php


// $divider = 0;
// $x = 10;


// try{
//     $result =  $x / $divider;
//     echo "result: $result\n";
// }catch (DivisionByZeroError $e) {
//     echo "Zero division\n";
//     echo "Message: " . $e->getMessage() . "\n";
//     echo "Code: " . $e->getCode() . "\n";
//     echo "File: " . $e->getFile() . "\n";
//     echo "Line: " . $e->getLine() . "\n";
// }catch (Error $e){
//     echo "Error\n";
// }finally{
//     echo "Finally is always executed\n";
// }


// echo "END";


try {
    $fileContent = FileReader::read('report.csv');
    echo DataParser::parse($fileContent);
    
} catch (FileNotFoundException $e) {
    // Specific error: File is missing
    echo "Please ensure report.csv exists in the directory.";
    
} catch (InvalidFormatException $e) {
    // Specific error: File exists, but the data inside is corrupted
    echo "The CSV file is corrupted.";
    
} catch (Exception $e) {
    // Catch-all: Something else went entirely wrong
    echo "An unknown error occurred: " . $e->getMessage();
}