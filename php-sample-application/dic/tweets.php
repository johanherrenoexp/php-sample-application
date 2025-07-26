<?php

return new Service\TweetsService(
    require "../config-dev/db-connection-docker.php"
);
