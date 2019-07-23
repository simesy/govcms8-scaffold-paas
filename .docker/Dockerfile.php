##
# `php` image
#
# This image is derived from php-fpm, which lacks tools to build Drupal.
# The files are therefore copied from the `cli` container (Dockerfile.cli) which is built first.
#

# CLI_IMAGE set in &lagoon-project in docker-compose.yml
ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM govcms8lagoon/php

RUN rm -rf /app
COPY --from=cli /app /app
