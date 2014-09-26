<?php
/**
 * WordPress Silence Is Golden
 *
 * @link https://github.com/tronsha/wp-silence-is-golden
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Stefan Hüsges
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

if (!defined('ABSPATH')) {
    if (strpos(__FILE__, 'wp-content/plugins/' . basename(__DIR__) . '/hide.php') === false) {
        die;
    }
    header('HTTP/1.0 404 Not Found');
    $root = realpath(__DIR__ . '/../../../');
    include_once $root . '/wp-config.php';
    $path = str_replace($root, '', __DIR__);
    $url = site_url($path . '/404.html');
    $content = file_get_contents($url, false, stream_context_create(array('http' => array('ignore_errors' => true))));
    die (str_replace(parse_url($url, PHP_URL_PATH), $_SERVER['PHP_SELF'], $content));
}
