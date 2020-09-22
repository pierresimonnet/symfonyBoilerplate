.DEFAULT_GOAL := help
help: ## list of available commands
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
.PHONY: help

##
## Webpack Encore
## ----
##
watch: ## Automatically recompile assets
	yarn encore dev --watch
.PHONY: watch

##
## Clear Cache
## ----
##
clear: ## Clear cache
	bin/console cache:clear
.PHONY: clear

##
## PHPStan Scan
## ----
##
scan: ## Scan with phpstan
	vendor/bin/phpstan analyse -l 8 src
.PHONY: scan

##
## Tests
## ----
##
test: ## Run unit and functional tests
	bin/phpunit tests --color
.PHONY: test