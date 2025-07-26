<?php

/**
 * Returns the best negotiated format according to RFC 7231.
 */

// Simple content negotiation fallback
$accept = $_SERVER["HTTP_ACCEPT"] ?? 'text/html';
if (strpos($accept, 'application/json') !== false) {
    return 'application/json';
}
return 'text/html';
