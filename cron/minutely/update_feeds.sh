#!/usr/bin/env sh
# Immediately updates the JSON feeds by invoking the page directly with php
curl http://localhost/community?max_age=0 > /dev/null
curl http://localhost/download?max_age=0 > /dev/null