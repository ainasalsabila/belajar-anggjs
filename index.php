<!DOCTYPE html>
<html ng-app='controllerAsExample'>
    <head>
        <title>Belajar AngularJS</title>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <style type="text/css">
            .merah{
                border:3px solid #c6535f;
                border-radius: 5px;
                padding: 5px;
            }

            .hijau{
                border:3px solid #35a06e;
                border-radius: 5px;
                padding: 5px;
            }

            div{
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <div id="ctrl-as-exmpl" ng-controller="SettingsController1 as settings">
            Name: <input type="text" ng-model="settings.name"/>
            [ <a href="" ng-click="settings.greet()">greet</a> ]<br/>
            Contact:
            <ul>
                <li ng-repeat="contact in settings.contacts">
                    <select ng-model="contact.type">
                        <option>phone</option>
                        <option>email</option>
                    </select>
                    <input type="text" ng-model="contact.value"/>
                    [ <a href="" ng-click="settings.clearContact(contact)">clear</a>
                    | <a href="" ng-click="settings.removeContact(contact)">X</a> ]
                </li>
                <li>[ <a href="" ng-click="settings.addContact()">add</a> ]</li>
            </ul>
        </div>

    </body>
</html>
