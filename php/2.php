<?php

// TODO: Remove first and end character
function remove_char(string $s): string
{
      return substr($s, 1, -1);
}
