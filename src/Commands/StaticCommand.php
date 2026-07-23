<?php
namespace RA\CLI\Commands;

class StaticCommand implements CommandInterface
{
    public static function run($options) {
        empty_dir_recursive('public');
        copy_recursive('static', 'public');
    }
}
