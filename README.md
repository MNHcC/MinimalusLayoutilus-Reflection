### Status
[![Build Status](https://travis-ci.org/MNHcC/minimaluslayoutilus_reflection.png)](https://travis-ci.org/MNHcC/minimaluslayoutilus_reflection)
#MinimalusLayoutilus Reflection
a set of custom reflection classes for the MNHcC MinimalusLayoutilus framework and projects or other projects
##installation
###composer on shell
```shell
composer config "repositories.MNHcC/MinimalusLayoutilus-Reflection" vcs https://github.com/MNHcC/MinimalusLayoutilus-Reflection.git
composer config "repositories.MNHcC/MinimalusLayoutilus-Stdlib" vcs https://github.com/MNHcC/MinimalusLayoutilus-Stdlib.git
composer require "MNHcC/MinimalusLayoutilus-Reflection:*@dev"
```
###composer.json
```json
{
    "repositories": {
        "MNHcC/MinimalusLayoutilus-Reflection": {
            "type": "vcs",
            "url": "https://github.com/MNHcC/MinimalusLayoutilus-Reflection.git"
        },
        "MNHcC/MinimalusLayoutilus-Stdlib": {
            "type": "vcs",
            "url": "https://github.com/MNHcC/MinimalusLayoutilus-Stdlib.git"
        }
    },
    "require": {
        "MNHcC/MinimalusLayoutilus-Reflection": "*@dev"
    }
}
```