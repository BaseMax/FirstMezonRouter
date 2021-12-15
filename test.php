<?php
// function norm_regex(string $input) : string
// {
//     // $input = str_replace('\\', '\\\\', $input);
//     // $input = str_replace('|', '\|', $input);
//     // $input = str_replace('/', '\/', $input);
//     return $input;
// }

function rglob(string $pattern, int $flags = 0) : array
{
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}

$result = array_reverse(rglob("lib/*.php"));
print_r($result);

$requires = '';
foreach($result as $filepath) {
    $requires.= 'require ("'. $filepath .'");' . "\n";
}

$content = '<?php
!defined("LOAD") ? exit("Error!") : null;

//Start
{loads}//End
';
$load_path = '_load.php';
// if(file_exists($load_path))
//     $content = file_get_contents($load_path);

// $start = "\/\/Start";
// $end = "\/\/End";
// $pattern = "/($start)\\n(.*?)($end)/si";
// print "Pattern: $pattern\n";
// preg_match($pattern, $content, $log);
// print_r($log);

$content = str_replace("{loads}", $requires, $content);
// $content = preg_replace_callback($pattern,
//     function($matches) use ($content) {
//         print_r($matches);
//         return $matches[0] . $content . $matches[2];
//     }, $content);

print "Content: $content\n";
if($content !== "")
    file_put_contents($load_path, $content);
