<?php

return new Service\UsersService(
    require "../config-dev/db-connection-docker.php"
);
