<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.08.15
 * Time: 14:15
 */
use frontend\assets\DefaultAsset;
DefaultAsset::register($this);
?>
<div class="syns.object" id="syns.object" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}" ui-view></div>


<div data-ng-include=" 'tpl/blocks/header.html' " class="app-header navbar ng-scope">      <!-- navbar header -->
    <div class="navbar-header bg-black">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
            <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
            <i class="fa fa-btc"></i>
            <img src="img/logo.png" alt="." class="hide">
            <span class="hidden-folded m-l-xs ng-binding">Angulr</span>
        </a>
        <!-- / brand -->
    </div>
    <!-- / navbar header -->

    <!-- navbar collapse -->
    <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
            <a href="" class="btn no-shadow navbar-btn" ng-click="app.settings.asideFolded = !app.settings.asideFolded">
                <i class="fa fa-dedent fa-fw"></i>
            </a>
            <a href="" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
                <i class="icon-user fa-fw"></i>
            </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
            <li class="dropdown pos-stc" dropdown="">
                <a href="" class="dropdown-toggle" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                    <span>Mega</span>
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu wrapper w-full bg-white">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="list-unstyled l-h-2x">
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="list-unstyled l-h-2x">
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 b-l b-light">
                            <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="list-unstyled l-h-2x">
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="list-unstyled l-h-2x">
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 b-l b-light">
                            <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                            <div class="text-center">
                                <div class="inline">
                                    <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }" class="easyPieChart" style="width: 100px; height: 100px; line-height: 100px;">
                                        <canvas width="100" height="100"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown" dropdown="">
                <a href="" class="dropdown-toggle" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                    <span translate="header.navbar.new.NEW" class="ng-scope">Новый</span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" translate="header.navbar.new.PROJECT" class="ng-scope">Проекты</a></li>
                    <li>
                        <a href="">
                            <span class="badge bg-info pull-right">5</span>
                            <span translate="header.navbar.new.TASK" class="ng-scope">Задача</span>
                        </a>
                    </li>
                    <li><a href="" translate="header.navbar.new.USER" class="ng-scope">Пользователь</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="">
                            <span class="badge bg-danger pull-right">4</span>
                            <span translate="header.navbar.new.EMAIL" class="ng-scope">Email</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul><form class="navbar-form navbar-form-sm navbar-left shift ng-pristine ng-valid ng-scope" ui-shift="prependTo" target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder ng-pristine ng-untouched ng-valid" placeholder="Search projects..." aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-33-2481"><ul class="dropdown-menu ng-isolate-scope ng-hide" ng-show="isOpen()" ng-style="{top: position.top+'px', left: position.left+'px'}" style="display: block;;display: block;" role="listbox" aria-hidden="true" typeahead-popup="" id="typeahead-33-2481" matches="matches" active="activeIdx" select="select(activeIdx)" query="query" position="position">
                        <!-- ngRepeat: match in matches track by $index -->
                    </ul>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </div>
        </form>
        <!-- / link and dropdown -->

        <!-- search form -->

        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-sm" is-open="lang.isopen" dropdown="">
                <a href="" class="dropdown-toggle ng-binding" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                    English <b class="caret"></b>
                </a>
                <!-- dropdown -->
                <ul class="dropdown-menu animated fadeInRight w">
                    <!-- ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                        <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">German</a>
                    </li><!-- end ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                        <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">English</a>
                    </li><!-- end ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                        <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">Italian</a>
                    </li><!-- end ngRepeat: (langKey, label) in langs -->
                </ul>
                <!-- / dropdown -->
            </li>
            <li class="hidden-xs">
                <a ui-fullscreen="" class=""><i class="fa fa-expand fa-fw text"></i><i class="fa fa-compress fa-fw text-active"></i></a>
            </li>
            <li class="dropdown" dropdown="">
                <a href="" class="dropdown-toggle" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell fa-fw"></i>
                    <span class="visible-xs-inline">Notifications</span>
                    <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                </a>
                <!-- dropdown -->
                <div class="dropdown-menu w-xl animated fadeInUp">
                    <div class="panel bg-white">
                        <div class="panel-heading b-light bg-light">
                            <strong>You have <span>2</span> notifications</strong>
                        </div>
                        <div class="list-group">
                            <a href="" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                            </a>
                            <a href="" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                            </a>
                        </div>
                        <div class="panel-footer text-sm">
                            <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                            <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                        </div>
                    </div>
                </div>
                <!-- / dropdown -->
            </li>
            <li class="dropdown" dropdown="">
                <a href="" class="dropdown-toggle clear" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
                    <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
                </a>
                <!-- dropdown -->
                <ul class="dropdown-menu animated fadeInRight w">
                    <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                        <div>
                            <p>300mb of 500mb used</p>
                        </div>
                        <div class="progress-xs m-b-none bg-white progress ng-isolate-scope" value="60">
                            <div class="progress-bar" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div>
                        </div>
                    </li>
                    <li>
                        <a href="">
                            <span class="badge bg-danger pull-right">30%</span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a ui-sref="app.page.profile" href="#/app/page/profile">Profile</a>
                    </li>
                    <li>
                        <a ui-sref="app.docs" href="#/app/docs">
                            <span class="label bg-info pull-right">new</span>
                            Help
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a ui-sref="access.signin" href="#/access/signin">Logout</a>
                    </li>
                </ul>
                <!-- / dropdown -->
            </li>
        </ul>
        <!-- / navbar right -->

    </div>
    <!-- / navbar collapse --></div>