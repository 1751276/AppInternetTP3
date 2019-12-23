<?php
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'Places'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Places/index', ['block' => 'scriptBottom']);
?>
<h3>Places</h3>
<div  ng-app="app" ng-controller="PlaceCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="place.id" /></td>
        </tr>
        <tr>
            <td width="100">Name:</td>
            <td><input type="text" id="name" ng-model="place.name" /></td>
        </tr>
        
    </table>
    <br /> <br /> 
    <button type="button"><a ng-click="getPlace(place.id)">Get Place</a></button>
    
    <button type="button"><a ng-click="updatePlace(place.id, place.name)">Update Place</a> </button>
   
    <button type="button"><a ng-click="addPlace(place.name)">Add Place</a> </button>
    
    <button type="button"><a ng-click="deletePlace(place.id)">Delete Place</a></button>
    <br /> 

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br /> 
    <button type="button"><a ng-click="getAllPlaces()">Get all Places</a><br /> </button>
    <br /> <br />
    <div ng-repeat="place in places">
        {{place.id}} - {{place.name}} 
    </div>
    <!-- pre ng-show='places'>{{places | json }}</pre-->
</div>

