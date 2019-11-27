<?php
session_start ();  
 

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	if(strcmp($_SESSION['r'], 'Admin') == 0)
{
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Icons - Wide icons selection including from flag icons to FontAwesome and other icons libraries.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide icons selection including from flag icons to FontAwesome and other icons libraries.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src" style="font-family: Poppins;font-size: 28px;color: black;">Prodigy</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/12.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <form method="get" action="Session/logout.php">
                                            <button type="submit" tabindex="0" class="dropdown-item">Déconnecter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                         <?php
                                       echo $_SESSION['l'];
                                       ?>
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src" style="font-family: Poppins;font-size: 28px;color: black;">Prodigy</div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Tableau de bord</li>
                                <li>
                                    <a href="home.php">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Tableau de bord
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">VENDRE</li>
                                <li
                                    
                                    
                                     class="mm-active"
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Commandes
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                         class="mm-show"
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="Commandes-buttons-standard.php">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-dropdowns.php">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-icons.php" class="mm-active">
                                                <i class="metismenu-icon">
                                                </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-badges-labels.php">
                                                <i class="metismenu-icon">
                                                </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-cards.php">
                                                <i class="metismenu-icon">
                                                </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-list-group.php">
                                                <i class="metismenu-icon">
                                                </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-navigation.php">
                                                <i class="metismenu-icon">
                                                </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-utilities.php">
                                                <i class="metismenu-icon">
                                                </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Catalogue
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="Catalogue-tabs.php">
                                                <i class="metismenu-icon">
                                                </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-accordions.php">
                                                <i class="metismenu-icon">
                                                </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-notifications.php">
                                                <i class="metismenu-icon">
                                                </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-modals.php">
                                                <i class="metismenu-icon">
                                                </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-progress-bar.php">
                                                <i class="metismenu-icon">
                                                </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-tooltips-popovers.php">
                                                <i class="metismenu-icon">
                                                </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-carousel.php">
                                                <i class="metismenu-icon">
                                                </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-calendar.php">
                                                <i class="metismenu-icon">
                                                </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-pagination.php">
                                                <i class="metismenu-icon">
                                                </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-scrollable-Commandes.php">
                                                <i class="metismenu-icon">
                                                </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-maps.php">
                                                <i class="metismenu-icon">
                                                </i>Maps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li  >
                                    <a href="tables-regular.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Widgets</li>
                                <li>
                                    <a href="dashboard-boxes.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Dashboard Boxes
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="forms-controls.php">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.php">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.php">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Forms Validation
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">PERSONNALISER</li>

                                <li





                                >
                                <a href="#" >
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Livraison
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <li>
                                        <a href="Commandes-buttons-standard.php">
                                            <i class="metismenu-icon"></i>
                                            Transporteurs
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-phone icon-gradient bg-night-fade">
                                        </i>
                                    </div>
                                    <div>Icons
                                        <div class="page-title-subheading">Wide icons selection including from flag icons to FontAwesome and other icons libraries.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Pe7 Icons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>FontAwesome</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Gradient Icons</h5>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-filter icon-gradient bg-warm-flame"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-help1 icon-gradient bg-night-fade"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-moon icon-gradient bg-sunny-morning"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-plane icon-gradient bg-tempting-azure"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-box2 icon-gradient bg-amy-crisp"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-lock icon-gradient bg-malibu-beach"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-mouse icon-gradient bg-heavy-rain"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-paint icon-gradient bg-arielle-smile"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-menu icon-gradient bg-ripe-malin"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-wristwatch icon-gradient bg-deep-blue"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-volume2 icon-gradient bg-happy-itmeo"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-video icon-gradient bg-happy-fisher"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-wallet icon-gradient bg-plum-plate"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-paint-bucket icon-gradient bg-grow-early"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-diamond icon-gradient bg-strong-bliss"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-magic-wand icon-gradient bg-mixed-hopes"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-arc icon-gradient bg-premium-dark"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-hourglass icon-gradient bg-love-kiss"> </i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-album"> </i>
                                                            <p>pe-7s-album</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-arc"> </i>
                                                            <p>pe-7s-arc</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-back-2"> </i>
                                                            <p>pe-7s-back-2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bandaid"> </i>
                                                            <p>pe-7s-bandaid</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-car"> </i>
                                                            <p>pe-7s-car</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-diamond"> </i>
                                                            <p>pe-7s-diamond</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-door-lock"> </i>
                                                            <p>pe-7s-door-lock</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-eyedropper"> </i>
                                                            <p>pe-7s-eyedropper</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-female"> </i>
                                                            <p>pe-7s-female</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-gym"> </i>
                                                            <p>pe-7s-gym</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-hammer"> </i>
                                                            <p>pe-7s-hammer</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-headphones"> </i>
                                                            <p>pe-7s-headphones</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-helm"> </i>
                                                            <p>pe-7s-helm</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-hourglass"> </i>
                                                            <p>pe-7s-hourglass</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-leaf"> </i>
                                                            <p>pe-7s-leaf</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-magic-wand"> </i>
                                                            <p>pe-7s-magic-wand</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-male"> </i>
                                                            <p>pe-7s-male</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-map-2"> </i>
                                                            <p>pe-7s-map-2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-next-2"> </i>
                                                            <p>pe-7s-next-2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-paint-bucket"> </i>
                                                            <p>pe-7s-paint-bucket</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-pendrive"> </i>
                                                            <p>pe-7s-pendrive</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-photo"> </i>
                                                            <p>pe-7s-photo</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-piggy"> </i>
                                                            <p>pe-7s-piggy</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-plugin"> </i>
                                                            <p>pe-7s-plugin</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-refresh-2"> </i>
                                                            <p>pe-7s-refresh-2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-rocket"> </i>
                                                            <p>pe-7s-rocket</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-settings"> </i>
                                                            <p>pe-7s-settings</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-shield"> </i>
                                                            <p>pe-7s-shield</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-smile"> </i>
                                                            <p>pe-7s-smile</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-usb"> </i>
                                                            <p>pe-7s-usb</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-vector"> </i>
                                                            <p>pe-7s-vector</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-wine"> </i>
                                                            <p>pe-7s-wine</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cloud-upload"> </i>
                                                            <p>pe-7s-cloud-upload</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cash"> </i>
                                                            <p>pe-7s-cash</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-close"> </i>
                                                            <p>pe-7s-close</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bluetooth"> </i>
                                                            <p>pe-7s-bluetooth</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cloud-download"> </i>
                                                            <p>pe-7s-cloud-download</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-way"> </i>
                                                            <p>pe-7s-way</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-close-circle"> </i>
                                                            <p>pe-7s-close-circle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-id"> </i>
                                                            <p>pe-7s-id</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-up"> </i>
                                                            <p>pe-7s-angle-up</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-wristwatch"> </i>
                                                            <p>pe-7s-wristwatch</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-up-circle"> </i>
                                                            <p>pe-7s-angle-up-circle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-world"> </i>
                                                            <p>pe-7s-world</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-right"> </i>
                                                            <p>pe-7s-angle-right</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-volume"> </i>
                                                            <p>pe-7s-volume</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-right-circle"> </i>
                                                            <p>pe-7s-angle-right-circle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-users"> </i>
                                                            <p>pe-7s-users</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-left"> </i>
                                                            <p>pe-7s-angle-left</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-user-female"> </i>
                                                            <p>pe-7s-user-female</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-left-circle"> </i>
                                                            <p>pe-7s-angle-left-circle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-up-arrow"> </i>
                                                            <p>pe-7s-up-arrow</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-down"> </i>
                                                            <p>pe-7s-angle-down</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-switch"> </i>
                                                            <p>pe-7s-switch</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-angle-down-circle"> </i>
                                                            <p>pe-7s-angle-down-circle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-scissors"> </i>
                                                            <p>pe-7s-scissors</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-wallet"> </i>
                                                            <p>pe-7s-wallet</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-safe"> </i>
                                                            <p>pe-7s-safe</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-volume2"> </i>
                                                            <p>pe-7s-volume2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-volume1"> </i>
                                                            <p>pe-7s-volume1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-voicemail"> </i>
                                                            <p>pe-7s-voicemail</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-video"> </i>
                                                            <p>pe-7s-video</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-user"> </i>
                                                            <p>pe-7s-user</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-upload"> </i>
                                                            <p>pe-7s-upload</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-unlock"> </i>
                                                            <p>pe-7s-unlock</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-umbrella"> </i>
                                                            <p>pe-7s-umbrella</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-trash"> </i>
                                                            <p>pe-7s-trash</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-tools"> </i>
                                                            <p>pe-7s-tools</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-timer"> </i>
                                                            <p>pe-7s-timer</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-ticket"> </i>
                                                            <p>pe-7s-ticket</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-target"> </i>
                                                            <p>pe-7s-target</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-sun"> </i>
                                                            <p>pe-7s-sun</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-study"> </i>
                                                            <p>pe-7s-study</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-stopwatch"> </i>
                                                            <p>pe-7s-stopwatch</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-star"> </i>
                                                            <p>pe-7s-star</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-speaker"> </i>
                                                            <p>pe-7s-speaker</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-signal"> </i>
                                                            <p>pe-7s-signal</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-shuffle"> </i>
                                                            <p>pe-7s-shuffle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-shopbag"> </i>
                                                            <p>pe-7s-shopbag</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-share"> </i>
                                                            <p>pe-7s-share</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-server"> </i>
                                                            <p>pe-7s-server</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-search"> </i>
                                                            <p>pe-7s-search</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-film"> </i>
                                                            <p>pe-7s-film</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-science"> </i>
                                                            <p>pe-7s-science</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-disk"> </i>
                                                            <p>pe-7s-disk</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-ribbon"> </i>
                                                            <p>pe-7s-ribbon</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-repeat"> </i>
                                                            <p>pe-7s-repeat</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-refresh"> </i>
                                                            <p>pe-7s-refresh</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-add-user"> </i>
                                                            <p>pe-7s-add-user</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-refresh-cloud"> </i>
                                                            <p>pe-7s-refresh-cloud</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-paperclip"> </i>
                                                            <p>pe-7s-paperclip</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-radio"> </i>
                                                            <p>pe-7s-radio</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-note2"> </i>
                                                            <p>pe-7s-note2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-print"> </i>
                                                            <p>pe-7s-print</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-network"> </i>
                                                            <p>pe-7s-network</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-prev"> </i>
                                                            <p>pe-7s-prev</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-mute"> </i>
                                                            <p>pe-7s-mute</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-power"> </i>
                                                            <p>pe-7s-power</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-medal"> </i>
                                                            <p>pe-7s-medal</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-portfolio"> </i>
                                                            <p>pe-7s-portfolio</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-like2"> </i>
                                                            <p>pe-7s-like2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-plus"> </i>
                                                            <p>pe-7s-plus</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-left-arrow"> </i>
                                                            <p>pe-7s-left-arrow</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-play"> </i>
                                                            <p>pe-7s-play</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-key"> </i>
                                                            <p>pe-7s-key</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-plane"> </i>
                                                            <p>pe-7s-plane</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-joy"> </i>
                                                            <p>pe-7s-joy</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-photo-gallery"> </i>
                                                            <p>pe-7s-photo-gallery</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-pin"> </i>
                                                            <p>pe-7s-pin</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-phone"> </i>
                                                            <p>pe-7s-phone</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-plug"> </i>
                                                            <p>pe-7s-plug</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-pen"> </i>
                                                            <p>pe-7s-pen</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-right-arrow"> </i>
                                                            <p>pe-7s-right-arrow</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-paper-plane"> </i>
                                                            <p>pe-7s-paper-plane</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-delete-user"> </i>
                                                            <p>pe-7s-delete-user</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-paint"> </i>
                                                            <p>pe-7s-paint</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bottom-arrow"> </i>
                                                            <p>pe-7s-bottom-arrow</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-notebook"> </i>
                                                            <p>pe-7s-notebook</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-note"> </i>
                                                            <p>pe-7s-note</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-next"> </i>
                                                            <p>pe-7s-next</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-news-paper"> </i>
                                                            <p>pe-7s-news-paper</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-musiclist"> </i>
                                                            <p>pe-7s-musiclist</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-music"> </i>
                                                            <p>pe-7s-music</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-mouse"> </i>
                                                            <p>pe-7s-mouse</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-more"> </i>
                                                            <p>pe-7s-more</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-moon"> </i>
                                                            <p>pe-7s-moon</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-monitor"> </i>
                                                            <p>pe-7s-monitor</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-micro"> </i>
                                                            <p>pe-7s-micro</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-menu"> </i>
                                                            <p>pe-7s-menu</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-map"> </i>
                                                            <p>pe-7s-map</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-map-marker"> </i>
                                                            <p>pe-7s-map-marker</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-mail"> </i>
                                                            <p>pe-7s-mail</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-mail-open"> </i>
                                                            <p>pe-7s-mail-open</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-mail-open-file"> </i>
                                                            <p>pe-7s-mail-open-file</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-magnet"> </i>
                                                            <p>pe-7s-magnet</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-loop"> </i>
                                                            <p>pe-7s-loop</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-look"> </i>
                                                            <p>pe-7s-look</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-lock"> </i>
                                                            <p>pe-7s-lock</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-lintern"> </i>
                                                            <p>pe-7s-lintern</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-link"> </i>
                                                            <p>pe-7s-link</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-like"> </i>
                                                            <p>pe-7s-like</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-light"> </i>
                                                            <p>pe-7s-light</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-less"> </i>
                                                            <p>pe-7s-less</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-keypad"> </i>
                                                            <p>pe-7s-keypad</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-junk"> </i>
                                                            <p>pe-7s-junk</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-info"> </i>
                                                            <p>pe-7s-info</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-home"> </i>
                                                            <p>pe-7s-home</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-help2"> </i>
                                                            <p>pe-7s-help2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-help1"> </i>
                                                            <p>pe-7s-help1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-graph3"> </i>
                                                            <p>pe-7s-graph3</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-graph2"> </i>
                                                            <p>pe-7s-graph2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-graph1"> </i>
                                                            <p>pe-7s-graph1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-graph"> </i>
                                                            <p>pe-7s-graph</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-global"> </i>
                                                            <p>pe-7s-global</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-gleam"> </i>
                                                            <p>pe-7s-gleam</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-glasses"> </i>
                                                            <p>pe-7s-glasses</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-gift"> </i>
                                                            <p>pe-7s-gift</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-folder"> </i>
                                                            <p>pe-7s-folder</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-flag"> </i>
                                                            <p>pe-7s-flag</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-filter"> </i>
                                                            <p>pe-7s-filter</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-file"> </i>
                                                            <p>pe-7s-file</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-expand1"> </i>
                                                            <p>pe-7s-expand1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-exapnd2"> </i>
                                                            <p>pe-7s-exapnd2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-edit"> </i>
                                                            <p>pe-7s-edit</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-drop"> </i>
                                                            <p>pe-7s-drop</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-drawer"> </i>
                                                            <p>pe-7s-drawer</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-download"> </i>
                                                            <p>pe-7s-download</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-display2"> </i>
                                                            <p>pe-7s-display2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-display1"> </i>
                                                            <p>pe-7s-display1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-diskette"> </i>
                                                            <p>pe-7s-diskette</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-date"> </i>
                                                            <p>pe-7s-date</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cup"> </i>
                                                            <p>pe-7s-cup</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-culture"> </i>
                                                            <p>pe-7s-culture</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-crop"> </i>
                                                            <p>pe-7s-crop</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-credit"> </i>
                                                            <p>pe-7s-credit</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-copy-file"> </i>
                                                            <p>pe-7s-copy-file</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-config"> </i>
                                                            <p>pe-7s-config</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-compass"> </i>
                                                            <p>pe-7s-compass</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-comment"> </i>
                                                            <p>pe-7s-comment</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-coffee"> </i>
                                                            <p>pe-7s-coffee</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cloud"> </i>
                                                            <p>pe-7s-cloud</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-clock"> </i>
                                                            <p>pe-7s-clock</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-check"> </i>
                                                            <p>pe-7s-check</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-chat"> </i>
                                                            <p>pe-7s-chat</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-cart"> </i>
                                                            <p>pe-7s-cart</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-camera"> </i>
                                                            <p>pe-7s-camera</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-call"> </i>
                                                            <p>pe-7s-call</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-calculator"> </i>
                                                            <p>pe-7s-calculator</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-browser"> </i>
                                                            <p>pe-7s-browser</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-box2"> </i>
                                                            <p>pe-7s-box2</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-box1"> </i>
                                                            <p>pe-7s-box1</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bookmarks"> </i>
                                                            <p>pe-7s-bookmarks</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bicycle"> </i>
                                                            <p>pe-7s-bicycle</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-bell"> </i>
                                                            <p>pe-7s-bell</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-battery"> </i>
                                                            <p>pe-7s-battery</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-ball"> </i>
                                                            <p>pe-7s-ball</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-back"> </i>
                                                            <p>pe-7s-back</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-attention"> </i>
                                                            <p>pe-7s-attention</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-anchor"> </i>
                                                            <p>pe-7s-anchor</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-albums"> </i>
                                                            <p>pe-7s-albums</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-alarm"> </i>
                                                            <p>pe-7s-alarm</p></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="pe-7s-airplay"> </i>
                                                            <p>pe-7s-airplay</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Gradient Icons</h5>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-ambulance icon-gradient bg-warm-flame"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-volume-up icon-gradient bg-night-fade"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-archive icon-gradient bg-sunny-morning"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-binoculars icon-gradient bg-tempting-azure"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-certificate icon-gradient bg-amy-crisp"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-download icon-gradient bg-malibu-beach"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-cog icon-gradient bg-mean-fruit"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-fire-extinguisher icon-gradient bg-heavy-rain"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-hammer icon-gradient bg-arielle-smile"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-database icon-gradient bg-ripe-malin"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-exclamation icon-gradient bg-deep-blue"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-file-archive icon-gradient bg-happy-itmeo"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-gavel icon-gradient bg-happy-fisher"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-crosshairs icon-gradient bg-plum-plate"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-deskpro icon-gradient bg-grow-early"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-satellite icon-gradient bg-strong-bliss"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-keyboard icon-gradient bg-mixed-hopes"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-gamepad icon-gradient bg-premium-dark"> </i></div>
                                                <div class="font-icon-wrapper font-icon-lg"><i class="fa fa-ship icon-gradient bg-love-kiss"> </i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use address-book"></i>
                                                            <p>fa-address-book</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use address-card"></i>
                                                            <p>fa-address-card</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use adjust"></i>
                                                            <p>fa-adjust</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use align-center"></i>
                                                            <p>fa-align-center</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use align-justify"></i>
                                                            <p>fa-align-justify</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use align-left"></i>
                                                            <p>fa-align-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use align-right"></i>
                                                            <p>fa-align-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ambulance"></i>
                                                            <p>fa-ambulance</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use american-sign-language-interpreting"></i>
                                                            <p>fa-american-sign-language-interpreting</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use anchor"></i>
                                                            <p>fa-anchor</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-double-down"></i>
                                                            <p>fa-angle-double-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-double-left"></i>
                                                            <p>fa-angle-double-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-double-right"></i>
                                                            <p>fa-angle-double-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-double-up"></i>
                                                            <p>fa-angle-double-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-down"></i>
                                                            <p>fa-angle-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-left"></i>
                                                            <p>fa-angle-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-right"></i>
                                                            <p>fa-angle-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-up"></i>
                                                            <p>fa-angle-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use archive"></i>
                                                            <p>fa-archive</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use area-chart"></i>
                                                            <p>fa-area-chart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-circle-down"></i>
                                                            <p>fa-arrow-circle-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-circle-left"></i>
                                                            <p>fa-arrow-circle-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-circle-right"></i>
                                                            <p>fa-arrow-circle-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-circle-up"></i>
                                                            <p>fa-arrow-circle-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-down"></i>
                                                            <p>fa-arrow-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-left"></i>
                                                            <p>fa-arrow-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i>
                                                            <p>fa-arrow-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-up"></i>
                                                            <p>fa-arrow-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrows-alt"></i>
                                                            <p>fa-arrows-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use asl-interpreting"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use assistive-listening-systems"></i>
                                                            <p>fa-assistive-listening-systems</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use asterisk"></i>
                                                            <p>fa-asterisk</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use at"></i>
                                                            <p>fa-at</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use audio-description"></i>
                                                            <p>fa-audio-description</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use automobile"></i>
                                                            <p>fa-automobile</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use backward"></i>
                                                            <p>fa-backward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use balance-scale"></i>
                                                            <p>fa-balance-scale</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ban"></i>
                                                            <p>fa-ban</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bank"></i>
                                                            <p>fa-bank</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bar-chart"></i>
                                                            <p>fa-bar-chart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bar-chart-o"></i>
                                                            <p>fa-chart-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use barcode"></i>
                                                            <p>fa-barcode</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bars"></i>
                                                            <p>fa-bars</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bathtub"></i>
                                                            <p>fa-bathtub</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery"></i>
                                                            <p>fa-fw</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-0"></i>
                                                            <p>fa-battery-0</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-1"></i>
                                                            <p>fa-battery-1</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-2"></i>
                                                            <p>fa-battery-2</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-3"></i>
                                                            <p>fa-battery-3</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-4"></i>
                                                            <p>fa-battery-4</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-empty"></i>
                                                            <p>fa-battery-empty</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-full"></i>
                                                            <p>fa-battery-full</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-half"></i>
                                                            <p>fa-battery-half</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-quarter"></i>
                                                            <p>fa-battery-quarter</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use battery-three-quarters"></i>
                                                            <p>fa-battery-three-quarters</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bed"></i>
                                                            <p>fa-bed</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use beer"></i>
                                                            <p>fa-beer</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bell"></i>
                                                            <p>fa-bell</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bell-slash"></i>
                                                            <p>fa-bell-slash</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bicycle"></i>
                                                            <p>fa-bicycle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use binoculars"></i>
                                                            <p>fa-binoculars</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use birthday-cake"></i>
                                                            <p>fa-birthday-cake</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use blind"></i>
                                                            <p>fa-blind</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bold"></i>
                                                            <p>fa-bold</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bolt"></i>
                                                            <p>fa-bolt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bomb"></i>
                                                            <p>fa-bomb</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use book"></i>
                                                            <p>fa-book</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bookmark"></i>
                                                            <p>fa-bookmark</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use braille"></i>
                                                            <p>fa-braille</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use briefcase"></i>
                                                            <p>fa-briefcase</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bug"></i>
                                                            <p>fa-bug</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use building"></i>
                                                            <p>fa-building</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bullhorn"></i>
                                                            <p>fa-bullhorn</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bullseye"></i>
                                                            <p>fa-bullseye</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bus"></i>
                                                            <p>fa-bus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cab"></i>
                                                            <p>fa-cab</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calculator"></i>
                                                            <p>fa-calculator</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar"></i>
                                                            <p>fa-calendar</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-check-o"></i>
                                                            <p>fa-calendar-check-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-minus-o"></i>
                                                            <p>fa-calendar-minus-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-o"></i>
                                                            <p>fa-calendar-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-plus-o"></i>
                                                            <p>fa-calendar-plus-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-times-o"></i>
                                                            <p>fa-calendar-times-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use camera"></i>
                                                            <p>fa-camera</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use camera-retro"></i>
                                                            <p>fa-camera-retro</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use car"></i>
                                                            <p>fa-car</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-down"></i>
                                                            <p>fa-caret-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-left"></i>
                                                            <p>fa-caret-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-right"></i>
                                                            <p>fa-caret-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-square-o-down"></i>
                                                            <p>fa-caret-square-o-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-square-o-left"></i>
                                                            <p>fa-caret-square-o-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-square-o-right"></i>
                                                            <p>fa-caret-square-o-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-square-o-up"></i>
                                                            <p>fa-caret-square-o-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use caret-up"></i>
                                                            <p>fa-caret-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cart-arrow-down"></i>
                                                            <p>fa-cart-arrow-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cart-plus"></i>
                                                            <p>fa-cart-plus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cc"></i>
                                                            <p>fa-cc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use certificate"></i>
                                                            <p>fa-certificate</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chain"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chain-broken"></i>
                                                            <p>fa-chain-broken</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use check"></i>
                                                            <p>fa-check</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use check-circle"></i>
                                                            <p>fa-check-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use check-square"></i>
                                                            <p>fa-check-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-circle-down"></i>
                                                            <p>fa-chevron-circle-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-circle-left"></i>
                                                            <p>fa-chevron-circle-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-circle-right"></i>
                                                            <p>fa-chevron-circle-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-circle-up"></i>
                                                            <p>fa-chevron-circle-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-down"></i>
                                                            <p>fa-chevron-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-left"></i>
                                                            <p>fa-chevron-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-right"></i>
                                                            <p>fa-chevron-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use chevron-up"></i>
                                                            <p>fa-chevron-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use child"></i>
                                                            <p>fa-child</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use circle"></i>
                                                            <p>fa-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use clipboard"></i>
                                                            <p>fa-clipboard</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use clock-o"></i>
                                                            <p>fa-clock-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use clone"></i>
                                                            <p>fa-clone</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use close"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cloud"></i>
                                                            <p>fa-cloud</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cny"></i>
                                                            <p>fa-times</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use code"></i>
                                                            <p>fa-code</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use code-fork"></i>
                                                            <p>fa-code-fork</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use coffee"></i>
                                                            <p>fa-coffee</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cog"></i>
                                                            <p>fa-cog</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cogs"></i>
                                                            <p>fa-cogs</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use columns"></i>
                                                            <p>fa-columns</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use comment"></i>
                                                            <p>fa-comment</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use commenting"></i>
                                                            <p>fa-commenting</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use comments"></i>
                                                            <p>fa-comments</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use compass"></i>
                                                            <p>fa-compass</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use compress"></i>
                                                            <p>fa-compress</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use copy"></i>
                                                            <p>fa-copy</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use copyright"></i>
                                                            <p>fa-copyright</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use credit-card"></i>
                                                            <p>fa-credit-card</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use crop"></i>
                                                            <p>fa-crop</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use crosshairs"></i>
                                                            <p>fa-crosshairs</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cube"></i>
                                                            <p>fa-cube</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cubes"></i>
                                                            <p>fa-cubes</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use cut"></i>
                                                            <p>fa-cut</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use database"></i>
                                                            <p>fa-database</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use deaf"></i>
                                                            <p>fa-deaf</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use deafness"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use desktop"></i>
                                                            <p>fa-desktop</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use dollar"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use dot-circle-o"></i>
                                                            <p>fa-dot-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use download"></i>
                                                            <p>fa-download</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use drivers-license"></i>
                                                            <p>fa-drivers-license</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>
                                                            <p>fa-edit</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eject"></i>
                                                            <p>fa-eject</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ellipsis-h"></i>
                                                            <p>fa-ellipsis-h</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ellipsis-v"></i>
                                                            <p>fa-ellipsis-v</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use envelope"></i>
                                                            <p>fa-envelope</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use envelope-open"></i>
                                                            <p>fa-envelope-open</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use envelope-square"></i>
                                                            <p>fa-envelope-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eraser"></i>
                                                            <p>fa-eraser</p>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eur"></i>
                                                            <p>fa-eur</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use euro"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use exclamation"></i>
                                                            <p>fa-exclamation</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use exclamation-circle"></i>
                                                            <p>fa-exclamation-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use exclamation-triangle"></i>
                                                            <p>fa-exclamation-triangle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use expand"></i>
                                                            <p>fa-expand</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eye"></i>
                                                            <p>fa-eye</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eye-slash"></i>
                                                            <p>fa-eye-slash</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use eyedropper"></i>
                                                            <p>fa-eyedropper</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fast-backward"></i>
                                                            <p>fa-fast-backward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fast-forward"></i>
                                                            <p>fa-fast-forward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fax"></i>
                                                            <p>fa-fax</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use feed"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use female"></i>
                                                            <p>fa-female</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fighter-jet"></i>
                                                            <p>fa-fighter-jet</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file"></i>
                                                            <p>fa-file</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-archive-o"></i>
                                                            <p>fa-file-archive-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-audio-o"></i>
                                                            <p>fa-file-audio-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-code-o"></i>
                                                            <p>fa-file-code-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-excel-o"></i>
                                                            <p>fa-file-excel-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-image-o"></i>
                                                            <p>fa-file-image-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-movie-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-pdf-o"></i>
                                                            <p>fa-file-pdf-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-photo-o"></i>
                                                            <p>fa-file-photo-0</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-picture-o"></i>
                                                            <p>fa-picture-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-powerpoint-o"></i>
                                                            <p>fa-file-powerpoint-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-sound-o"></i>
                                                            <p>fa-file-sound-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-text"></i>
                                                            <p>fa-file-text</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-video-o"></i>
                                                            <p>fa-file-video-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-word-o"></i>
                                                            <p>fa-file-word-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-zip-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use files-o"></i>
                                                            <p>fa-files-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use film"></i>
                                                            <p>fa-film</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use filter"></i>
                                                            <p>fa-filter</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fire"></i>
                                                            <p>fa-fire</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fire-extinguisher"></i>
                                                            <p>fa-fire-extinguisher</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use firefox"></i>
                                                            <p>fa-firefox</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use first-order"></i>
                                                            <p>fa-first-order</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use flag"></i>
                                                            <p>fa-flag</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use flag-checkered"></i>
                                                            <p>fa-flag-checkered</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use flask"></i>
                                                            <p>fa-flask</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use floppy-o"></i>
                                                            <p>fa-floppy-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use folder"></i>
                                                            <p>fa-folder</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use folder-o"></i>
                                                            <p>fa-folder-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use folder-open"></i>
                                                            <p>fa-folder-open</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use folder-open-o"></i>
                                                            <p>fa-folder-open-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use font"></i>
                                                            <p>fa-font</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use font-awesome"></i>
                                                            <p>fa-font-awesome</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fonticons"></i>
                                                            <p>fa-fonticons</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use fort-awesome"></i>
                                                            <p>fa-fort-awesome</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use forumbee"></i>
                                                            <p>fa-forumbee</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use forward"></i>
                                                            <p>fa-forward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use foursquare"></i>
                                                            <p>fa-foursquare</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use free-code-camp"></i>
                                                            <p>fa-free-code-camp</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use frown-o"></i>
                                                            <p>fa-frown-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use futbol-o"></i>
                                                            <p>fa-futbol-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gamepad"></i>
                                                            <p>fa-gamepad</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gavel"></i>
                                                            <p>fa-gavel</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gbp"></i>
                                                            <p>fa-gbp</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ge"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gear"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gears"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use genderless"></i>
                                                            <p>fa-genderless</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use get-pocket"></i>
                                                            <p>fa-get-pocket</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gg"></i>
                                                            <p>fa-gg</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gg-circle"></i>
                                                            <p>fa-gg-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gift"></i>
                                                            <p>fa-gift</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use git"></i>
                                                            <p>fa-git</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use git-square"></i>
                                                            <p>fa-git-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use github"></i>
                                                            <p>fa-github</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use github-alt"></i>
                                                            <p>fa-github-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use github-square"></i>
                                                            <p>fa-github-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gitlab"></i>
                                                            <p>fa-gitlab</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gittip"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use glass"></i>
                                                            <p>fa-glass</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use glide"></i>
                                                            <p>fa-glide</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use glide-g"></i>
                                                            <p>fa-glide-g</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use globe"></i>
                                                            <p>fa-globe</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google"></i>
                                                            <p>fa-google</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google-plus"></i>
                                                            <p>fa-google-plus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google-plus-circle"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google-plus-official"></i>
                                                            <p>fa-google-plus-official</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google-plus-square"></i>
                                                            <p>fa-google-plus-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use google-wallet"></i>
                                                            <p>fa-google-wallet</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use graduation-cap"></i>
                                                            <p>fa-graduation-cap</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gratipay"></i>
                                                            <p>fa-gratipay</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use grav"></i>
                                                            <p>fa-grav</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use group"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use h-square"></i>
                                                            <p>fa-h-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hacker-news"></i>
                                                            <p>fa-hacker-news</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-grab-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-lizard-o"></i>
                                                            <p>fa-hand-lizard-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-o-down"></i>
                                                            <p>fa-hand-o-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-o-left"></i>
                                                            <p>fa-hand-o-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-o-right"></i>
                                                            <p>fa-hand-o-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-o-up"></i>
                                                            <p>fa-hand-o-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-paper-o"></i>
                                                            <p>fa-hand-paper-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-peace-o"></i>
                                                            <p>fa-hand-peace-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-pointer-o"></i>
                                                            <p>fa-hand-pointer-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-rock-o"></i>
                                                            <p>fa-hand-rock-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-scissors-o"></i>
                                                            <p>fa-hand-scissors-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-spock-o"></i>
                                                            <p>fa-hand-spock-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hand-stop-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i>
                                                            <p>fa-handshake-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hard-of-hearing"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hashtag"></i>
                                                            <p>fa-hashtag</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hdd-o"></i>
                                                            <p>fa-hdd-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use header"></i>
                                                            <p>fa-header</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use headphones"></i>
                                                            <p>fa-headphones</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use heart"></i>
                                                            <p>fa-heart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use heart-o"></i>
                                                            <p>fa-heart-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use heartbeat"></i>
                                                            <p>fa-heartbeat</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use history"></i>
                                                            <p>fa-history</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use home"></i>
                                                            <p>fa-home</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hospital-o"></i>
                                                            <p>fa-hospital-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hotel"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass"></i>
                                                            <p>fa-hourglass</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-1"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-2"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-3"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-end"></i>
                                                            <p>fa-hourglass-end</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-half"></i>
                                                            <p>fa-hourglass-half</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-o"></i>
                                                            <p>fa-hourglass-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use hourglass-start"></i>
                                                            <p>fa-hourglass-start</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use i-cursor"></i>
                                                            <p>fa-i-cursor</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use id-badge"></i>
                                                            <p>fa-id-badge</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use id-card"></i>
                                                            <p>fa-id-card</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use id-card-o"></i>
                                                            <p>fa-id-card-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ils"></i>
                                                            <p>fa-ils</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use image"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use inbox"></i>
                                                            <p>fa-inbox</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use indent"></i>
                                                            <p>fa-indent</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use industry"></i>
                                                            <p>fa-industry</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use info"></i>
                                                            <p>fa-info</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use info-circle"></i>
                                                            <p>fa-info-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use inr"></i>
                                                            <p>fa-inr</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use instagram"></i>
                                                            <p>fa-instagram</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use institution"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use internet-explorer"></i>
                                                            <p>fa-internet-explorer</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use intersex"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ioxhost"></i>
                                                            <p>fa-ioxhost</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use italic"></i>
                                                            <p>fa-italic</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use joomla"></i>
                                                            <p>fa-joomla</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use jpy"></i>
                                                            <p>fa-jpy</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use jsfiddle"></i>
                                                            <p>fa-jsfiddle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use key"></i>
                                                            <p>fa-key</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use keyboard-o"></i>
                                                            <p>fa-keyboard-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use krw"></i>
                                                            <p>fa-krw</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use language"></i>
                                                            <p>fa-language</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use laptop"></i>
                                                            <p>fa-laptop</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use lastfm"></i>
                                                            <p>fa-lastfm</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use lastfm-square"></i>
                                                            <p>fa-lastfm-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use leaf"></i>
                                                            <p>fa-leaf</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use leanpub"></i>
                                                            <p>fa-leanpub</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use legal"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use lemon-o"></i>
                                                            <p>fa-lemon-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use level-down"></i>
                                                            <p>fa-level-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use level-up"></i>
                                                            <p>fa-level-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-bouy"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-buoy"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-ring"></i>
                                                            <p>fa-life-ring</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-saver"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use lightbulb-o"></i>
                                                            <p>fa-lightbulb-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use line-chart"></i>
                                                            <p>fa-line-chart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use link"></i>
                                                            <p>fa-link</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use linkedin"></i>
                                                            <p>fa-linkedin</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use linkedin-square"></i>
                                                            <p>fa-linkedin-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use linode"></i>
                                                            <p>fa-linode</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use linux"></i>
                                                            <p>fa-linux</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use list"></i>
                                                            <p>fa-list</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use list-alt"></i>
                                                            <p>fa-list-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use list-ol"></i>
                                                            <p>fa-list-ol</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use list-ul"></i>
                                                            <p>fa-list-ul</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use location-arrow"></i>
                                                            <p>fa-location-arrow</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use lock"></i>
                                                            <p>fa-lock</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use long-arrow-down"></i>
                                                            <p>fa-long-arrow-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use long-arrow-left"></i>
                                                            <p>fa-long-arrow-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use long-arrow-right"></i>
                                                            <p>fa-long-arrow-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use long-arrow-up"></i>
                                                            <p>fa-long-arrow-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use low-vision"></i>
                                                            <p>fa-low-vision</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use magic"></i>
                                                            <p>fa-magic</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use magnet"></i>
                                                            <p>fa-magnet</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mail-forward"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mail-reply"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mail-reply-all"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use male"></i>
                                                            <p>fa-male</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use map"></i>
                                                            <p>fa-map</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use map-marker"></i>
                                                            <p>fa-map-marker</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use map-o"></i>
                                                            <p>fa-map-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use map-pin"></i>
                                                            <p>fa-map-pin</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use map-signs"></i>
                                                            <p>fa-map-signs</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mars"></i>
                                                            <p>fa-mars</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mars-double"></i>
                                                            <p>fa-mars-double</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mars-stroke"></i>
                                                            <p>fa-mars-stroke</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mars-stroke-h"></i>
                                                            <p>fa-mars-stroke-h</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mars-stroke-v"></i>
                                                            <p>fa-mars-stroke-v</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use maxcdn"></i>
                                                            <p>fa-maxcdn</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use meanpath"></i>
                                                            <p>fa-meanpath</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use medium"></i>
                                                            <p>fa-medium</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use medkit"></i>
                                                            <p>fa-medkit</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use meetup"></i>
                                                            <p>fa-meetup</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use meh-o"></i>
                                                            <p>fa-meh-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mercury"></i>
                                                            <p>fa-mercury</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use microchip"></i>
                                                            <p>fa-microchip</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use microphone"></i>
                                                            <p>fa-microphone</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use microphone-slash"></i>
                                                            <p>fa-microphone-slash</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use minus"></i>
                                                            <p>fa-minus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use minus-circle"></i>
                                                            <p>fa-minus-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use minus-square"></i>
                                                            <p>fa-minus-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use minus-square-o"></i>
                                                            <p>fa-minus-square-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mixcloud"></i>
                                                            <p>fa-mixcloud</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mobile"></i>
                                                            <p>fa-mobile</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mobile-phone"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use modx"></i>
                                                            <p>fa-modx</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use money"></i>
                                                            <p>fa-money</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use moon-o"></i>
                                                            <p>fa-moon-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mortar-board"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use motorcycle"></i>
                                                            <p>fa-motorcycle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use mouse-pointer"></i>
                                                            <p>fa-mouse-pointer</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use music"></i>
                                                            <p>fa-music</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use navicon"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use neuter"></i>
                                                            <p>fa-neuter</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use newspaper-o"></i>
                                                            <p>fa-newspaper-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use object-group"></i>
                                                            <p>fa-object-group</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use object-ungroup"></i>
                                                            <p>fa-object-ungroup</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use outdent"></i>
                                                            <p>fa-outdent</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paint-brush"></i>
                                                            <p>fa-paint-brush</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paper-plane"></i>
                                                            <p>fa-paper-plane</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paper-plane-o"></i>
                                                            <p>fa-paper-plane-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paperclip"></i>
                                                            <p>fa-paperclip</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paragraph"></i>
                                                            <p>fa-paragraph</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paste"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pause"></i>
                                                            <p>fa-pause</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pause-circle"></i>
                                                            <p>fa-pause-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pause-circle-o"></i>
                                                            <p>fa-pause-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paw"></i>
                                                            <p>fa-paw</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use paypal"></i>
                                                            <p>fa-paypal</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil"></i>
                                                            <p>fa-pencil</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square"></i>
                                                            <p>fa-pencil-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o"></i>
                                                            <p>fa-pencil-square-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use percent"></i>
                                                            <p>fa-percent</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use phone"></i>
                                                            <p>fa-phone</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use phone-square"></i>
                                                            <p>fa-phone-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use photo"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use picture-o"></i>
                                                            <p>fa-picture-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pie-chart"></i>
                                                            <p>fa-pie-chart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pied-piper"></i>
                                                            <p>fa-pied-piper</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pied-piper-alt"></i>
                                                            <p>fa-pied-piper-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pied-piper-pp"></i>
                                                            <p>fa-pied-piper-pp</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pinterest"></i>
                                                            <p>fa-pinterest</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pinterest-p"></i>
                                                            <p>fa-pinterest-p</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use pinterest-square"></i>
                                                            <p>fa-pinterest-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plane"></i>
                                                            <p>fa-plane</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use play"></i>
                                                            <p>fa-play</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use play-circle"></i>
                                                            <p>fa-play-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use play-circle-o"></i>
                                                            <p>fa-play-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plug"></i>
                                                            <p>fa-plug</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>
                                                            <p>fa-plus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-circle"></i>
                                                            <p>fa-plus-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i>
                                                            <p>fa-plus-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square-o"></i>
                                                            <p>fa-plus-square-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use podcast"></i>
                                                            <p>fa-podcast</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use power-off"></i>
                                                            <p>fa-power-off</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use print"></i>
                                                            <p>fa-print</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use product-hunt"></i>
                                                            <p>fa-product-hunt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use puzzle-piece"></i>
                                                            <p>fa-puzzle-piece</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use qq"></i>
                                                            <p>fa-qq</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use qrcode"></i>
                                                            <p>fa-qrcode</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use question"></i>
                                                            <p>fa-question</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use question-circle"></i>
                                                            <p>fa-question-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use question-circle-o"></i>
                                                            <p>fa-question-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use quora"></i>
                                                            <p>fa-quora</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use quote-left"></i>
                                                            <p>fa-quote-left</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use quote-right"></i>
                                                            <p>fa-quote-right</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ra"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use random"></i>
                                                            <p>fa-random</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ravelry"></i>
                                                            <p>fa-ravelry</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rebel"></i>
                                                            <p>fa-rebel</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use recycle"></i>
                                                            <p>fa-recycle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reddit"></i>
                                                            <p>fa-reddit</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reddit-alien"></i>
                                                            <p>fa-reddit-alien</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reddit-square"></i>
                                                            <p>fa-reddit-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use refresh"></i>
                                                            <p>fa-refresh</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use registered"></i>
                                                            <p>fa-registered</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use remove"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use renren"></i>
                                                            <p>fa-renren</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reorder"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use repeat"></i>
                                                            <p>fa-repeat</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reply"></i>
                                                            <p>fa-reply</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use reply-all"></i>
                                                            <p>fa-reply-all</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use resistance"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use retweet"></i>
                                                            <p>fa-retweet</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rmb"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use road"></i>
                                                            <p>fa-road</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rocket"></i>
                                                            <p>fa-rocket</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rotate-left"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rotate-right"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rouble"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rss"></i>
                                                            <p>fa-rss</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rss-square"></i>
                                                            <p>fa-rss-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rub"></i>
                                                            <p>fa-rub</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ruble"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use rupee"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use s15"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use safari"></i>
                                                            <p>fa-safari</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use save"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use scissors"></i>
                                                            <p>fa-scissors</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use scribd"></i>
                                                            <p>fa-scribd</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use search"></i>
                                                            <p>fa-search</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use search-minus"></i>
                                                            <p>fa-search-minus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use search-plus"></i>
                                                            <p>fa-search-plus</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sellsy"></i>
                                                            <p>fa-sellsy</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use send"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use send-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use server"></i>
                                                            <p>fa-server</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use share"></i>
                                                            <p>fa-share</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use share-alt"></i>
                                                            <p>fa-share-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use share-alt-square"></i>
                                                            <p>fa-share-alt-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use share-square"></i>
                                                            <p>fa-share-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use share-square-o"></i>
                                                            <p>fa-share-square-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shekel"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sheqel"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shield"></i>
                                                            <p>fa-shield</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ship"></i>
                                                            <p>fa-ship</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shirtsinbulk"></i>
                                                            <p>fa-shirtsinbulk</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-bag"></i>
                                                            <p>fa-shopping-bag</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-basket"></i>
                                                            <p>fa-shopping-basket</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-cart"></i>
                                                            <p>fa-shopping-cart</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shower"></i>
                                                            <p>fa-shower</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sign-in"></i>
                                                            <p>fa-sign-in</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sign-language"></i>
                                                            <p>fa-sign-language</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sign-out"></i>
                                                            <p>fa-sign-out</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use signal"></i>
                                                            <p>fa-signal</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use signing"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use simplybuilt"></i>
                                                            <p>fa-simplybuilt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sitemap"></i>
                                                            <p>fa-sitemap</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use skyatlas"></i>
                                                            <p>fa-skyatlas</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use skype"></i>
                                                            <p>fa-skype</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use slack"></i>
                                                            <p>fa-slack</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sliders"></i>
                                                            <p>fa-sliders</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use slideshare"></i>
                                                            <p>fa-slideshare</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use smile-o"></i>
                                                            <p>fa-smile-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use snapchat"></i>
                                                            <p>fa-snapchat</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use snapchat-ghost"></i>
                                                            <p>fa-snapchat-ghost</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use snapchat-square"></i>
                                                            <p>fa-snapchat-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use snowflake-o"></i>
                                                            <p>fa-snowflake-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use soccer-ball-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort"></i>
                                                            <p>fa-sort</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-alpha-asc"></i>
                                                            <p>fa-sort-alpha-asc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-alpha-desc"></i>
                                                            <p>fa-sort-alpha-desc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-amount-asc"></i>
                                                            <p>fa-sort-amount-asc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-amount-desc"></i>
                                                            <p>fa-sort-amount-desc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-asc"></i>
                                                            <p>fa-sort-asc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-desc"></i>
                                                            <p>fa-sort-desc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-down"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-numeric-asc"></i>
                                                            <p>fa-sort-numeric-asc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-numeric-desc"></i>
                                                            <p>fa-sort-numeric-desc</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sort-up"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use soundcloud"></i>
                                                            <p>fa-soundcloud</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use space-shuttle"></i>
                                                            <p>fa-space-shuttle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use spinner"></i>
                                                            <p>fa-spinner</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use spoon"></i>
                                                            <p>fa-spoon</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use spotify"></i>
                                                            <p>fa-spotify</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use square"></i>
                                                            <p>fa-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use square-o"></i>
                                                            <p>fa-square-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stack-exchange"></i>
                                                            <p>fa-stack-exchange</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stack-overflow"></i>
                                                            <p>fa-stack-overflow</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star"></i>
                                                            <p>fa-star</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star-half"></i>
                                                            <p>fa-star-half</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star-half-empty"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star-half-full"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star-half-o"></i>
                                                            <p>fa-star-half-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use star-o"></i>
                                                            <p>fa-star-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use steam"></i>
                                                            <p>fa-steam</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use steam-square"></i>
                                                            <p>fa-steam-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use step-backward"></i>
                                                            <p>fa-step-backward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use step-forward"></i>
                                                            <p>fa-step-forward</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stethoscope"></i>
                                                            <p>fa-stethoscope</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sticky-note"></i>
                                                            <p>fa-sticky-note</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sticky-note-o"></i>
                                                            <p>fa-sticky-note-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stop"></i>
                                                            <p>fa-stop</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stop-circle"></i>
                                                            <p>fa-stop-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stop-circle-o"></i>
                                                            <p>fa-stop-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use street-view"></i>
                                                            <p>fa-street-view</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use strikethrough"></i>
                                                            <p>fa-strikethrough</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stumbleupon"></i>
                                                            <p>fa-stumbleupon</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use stumbleupon-circle"></i>
                                                            <p>fa-stumbleupon-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use subscript"></i>
                                                            <p>fa-subscript</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use subway"></i>
                                                            <p>fa-subway</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use suitcase"></i>
                                                            <p>fa-suitcase</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sun-o"></i>
                                                            <p>fa-sun-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use superpowers"></i>
                                                            <p>fa-superpowers</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use superscript"></i>
                                                            <p>fa-superscript</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use support"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use table"></i>
                                                            <p>fa-table</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tablet"></i>
                                                            <p>fa-tablet</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tachometer"></i>
                                                            <p>fa-tachometer</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tag"></i>
                                                            <p>fa-tag</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tags"></i>
                                                            <p>fa-tags</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tasks"></i>
                                                            <p>fa-tasks</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use taxi"></i>
                                                            <p>fa-taxi</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use telegram"></i>
                                                            <p>fa-telegram</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use television"></i>
                                                            <p>fa-television</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tencent-weibo"></i>
                                                            <p>fa-tencent-weibo</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use terminal"></i>
                                                            <p>fa-terminal</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use text-height"></i>
                                                            <p>fa-text-height</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use text-width"></i>
                                                            <p>fa-text-width</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use th"></i>
                                                            <p>fa-th</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use th-large"></i>
                                                            <p>fa-th-large</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use th-list"></i>
                                                            <p>fa-th-list</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use themeisle"></i>
                                                            <p>fa-themeisle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-0"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-1"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-2"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-3"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-4"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-empty"></i>
                                                            <p>fa-thermometer-empty</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-full"></i>
                                                            <p>fa-thermometer-full</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-half"></i>
                                                            <p>fa-thermometer-half</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-quarter"></i>
                                                            <p>fa-thermometer-quarter</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thermometer-three-quarters"></i>
                                                            <p>fa-thermometer-three-quarters</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thumb-tack"></i>
                                                            <p>fa-thumb-tack</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thumbs-down"></i>
                                                            <p>fa-thumbs-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thumbs-o-down"></i>
                                                            <p>fa-thumbs-o-down</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thumbs-o-up"></i>
                                                            <p>fa-thumbs-o-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use thumbs-up"></i>
                                                            <p>fa-thumbs-up</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ticket"></i>
                                                            <p>fa-ticket</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i>
                                                            <p>fa-times</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use times-circle"></i>
                                                            <p>fa-times-circle</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use times-circle-o"></i>
                                                            <p>fa-times-circle-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use times-rectangle"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use times-rectangle-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tint"></i>
                                                            <p>fa-tint</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-down"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-left"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-off"></i>
                                                            <p>fa-toggle-off</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-on"></i>
                                                            <p>fa-toggle-on</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-right"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use toggle-up"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use trademark"></i>
                                                            <p>fa-trademark</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use train"></i>
                                                            <p>fa-train</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use transgender"></i>
                                                            <p>fa-transgender</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use transgender-alt"></i>
                                                            <p>fa-transgender-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i>
                                                            <p>fa-trash</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use trash-o"></i>
                                                            <p>fa-trash-o</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tree"></i>
                                                            <p>fa-tree</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use trello"></i>
                                                            <p>fa-trello</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tripadvisor"></i>
                                                            <p>fa-tripadvisor</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use trophy"></i>
                                                            <p>fa-trophy</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use truck"></i>
                                                            <p>fa-truck</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use try"></i>
                                                            <p>fa-try</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tty"></i>
                                                            <p>fa-tty</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tumblr"></i>
                                                            <p>fa-tumblr</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tumblr-square"></i>
                                                            <p>fa-tumblr-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use turkish-lira"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use tv"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use twitch"></i>
                                                            <p>fa-twitch</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use twitter"></i>
                                                            <p>fa-twitter</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use twitter-square"></i>
                                                            <p>fa-twitter-square</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use umbrella"></i>
                                                            <p>fa-umbrella</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use underline"></i>
                                                            <p>fa-underline</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use undo"></i>
                                                            <p>fa-undo</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use universal-access"></i>
                                                            <p>fa-universal-access</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use university"></i>
                                                            <p>fa-university</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use unlink"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use unlock"></i>
                                                            <p>fa-unlock</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use unlock-alt"></i>
                                                            <p>fa-unlock-alt</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use unsorted"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use upload"></i>
                                                            <p>fa-upload</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use usb"></i>
                                                            <p>fa-usb</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use usd"></i>
                                                            <p>fa-usd</p>
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-2">
            
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user"></i>
                                                            <p>fa-user</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-circle"></i>
                                                            <p>fa-user-circle</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-circle-o"></i>
                                                            <p>fa-user-circle-o</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-md"></i>
                                                            <p>fa-user-md</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-o"></i>
                                                            <p>fa-user-o</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-plus"></i>
                                                            <p>fa-user-plus</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-secret"></i>
                                                            <p>fa-user-secret</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-times"></i>
                                                            <p>fa-user-times</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use users"></i>
                                                            <p>fa-users</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vcard"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vcard-o"></i>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use venus"></i>
                                                            <p>fa-venus</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use venus-double"></i>
                                                            <p>fa-venus-double</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use venus-mars"></i>
                                                            <p>fa-venus-mars</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use viacoin"></i>
                                                            <p>fa-viacoin</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use viadeo"></i>
                                                            <p>fa-viadeo</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use viadeo-square"></i>
                                                            <p>fa-viadeo-square</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use video-camera"></i>
                                                            <p>fa-video-camera</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vimeo"></i>
                                                            <p>fa-vimeo</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vimeo-square"></i>
                                                            <p>fa-vimeo-square</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vine"></i>
                                                            <p>fa-vine</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use vk"></i>
                                                            <p>fa-vk</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use volume-control-phone"></i>
                                                            <p>fa-volume-control-phone</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use volume-down"></i>
                                                            <p>fa-volume-down</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use volume-off"></i>
                                                            <p>fa-volume-off</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use volume-up"></i>
                                                            <p>fa-volume-up</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use warning"></i>
                                                            <p>fa-warning</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use wheelchair"></i>
                                                            <p>fa-wheelchair</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use wifi"></i>
                                                            <p>fa-wifi</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use window-maximize"></i>
                                                            <p>fa-window-maximize</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use window-minimize"></i>
                                                            <p>fa-window-minimize</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use window-restore"></i>
                                                            <p>fa-window-restore</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use won"></i>
                                                            <p>fa-won</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use wrench"></i>
                                                            <p>fa-wrench</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use yen"></i>
                                                            <p>fa-yen</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<?php
}
}
else { 
	echo 'Veuillez vous connecter </br>';  
	echo '<a href="index.php">Cliquer pour se connecter</a>';

}
?>