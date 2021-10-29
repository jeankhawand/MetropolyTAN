# MetropolyTAN

## Introduction

---

From scratch, we would like to conceive, implement, and deploy a mobile application which allows an innovative and dynamic carpooling by sharing your personal car or available seats, whatever your pertaining to a single group or several one, whichever modalities you use (car, foot, bus, train, plane, …), and wherever you are on a territory, especially a territory badly and partially deserved by public transportation.
Such an application may help manage individual mobility and improve the Global Public Transportation Offer by integrating Individual Vehicles.

## Project Structure

---

```
├── assets
├── e2e
├── MetropolyTANCore
│   ├── app
│   ├── app.dockerfile
│   ├── artisan
│   ├── bootstrap
│   ├── composer.json
│   ├── composer.lock
│   ├── config
│   ├── database
│   ├── docker-compose.override.yml
│   ├── docker-compose.yml
│   ├── Modules
│   ├── modules_statuses.json
│   ├── nginx
│   ├── package.json
│   ├── phpunit.xml
│   ├── public
│   ├── README.md
│   ├── resources
│   ├── routes
│   ├── run.sh
│   ├── server.php
│   ├── storage
│   ├── tests
│   ├── vendor
│   └── webpack.mix.js
├── metropolytan_mobile
│   ├── android
│   ├── ios
│   ├── lib
│   ├── metropolytan_mobile.iml
│   ├── pubspec.lock
│   ├── pubspec.yaml
│   ├── README.md
│   └── test
└── README.md
```

1. `assets` contains all the needed illustration for the project (UML, Sequence, ....)
2. `e2e` contains E2E Testing for QA Automation (Cypress)
3. `MetropolyTANCore` contains metropolyTAN back office application/API
   - `Modules` represents a small laravel applications offering a de-coupling and clean representation for different app functionalities by applying separation of concerns principal
4. `metropolytan_mobile` contains cross platform mobile application using Flutter

## Workflow

---

### Git

---

#### Branches

- `master` we should use it for production purposes
- `develop` development cycle
- `hot-fix` fixing critical issues
- `feature/` consist of each feature id that will be assigned to each feature e.g. `feature/1-setup-login`

#### :warning: Tips

- keep commits small (Create small commits so it’s easier to describe the context in your commit message)

```bash
git commit -m "fix heading size"
```

- in case you need to pull changes from `develop` take into consideration to either commit your changes and pull new changes or stash you current changes and pull new changes (keep in mind, that newly created files can't be stashed)

```bash
# stash
git stash
# revert stash
git stash pop
```

### Gant Chart

---

---

## Architecture

---

### Use Case Diagram

---

### UML

---

### Sequence

---

### Tech

---

### DB Model

---

## Tools

---

- [x] [VSCode](https://code.visualstudio.com/) IDE used as a main editor for development
  - [x] [Docker Extension](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker) Extension used to show running container integrated to VSCode
  - [x] [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode) Extension used to format code
- [x] [DataGrip](https://www.jetbrains.com/datagrip/) IDE used for database
- [x] [Diagram Net](https://app.diagrams.net/) used to illustrate diagrams
- [x] [Microsoft Project](https://www.microsoft.com/en-us/microsoft-365/project/project-management-software) used to organize project life cycle through Gantt Chart and Phases Structure

## [Backend Instructions](/MetropolyTANCore/README.md)

## [Mobile App Instructions](/metropolytan_mobile/README.md)
