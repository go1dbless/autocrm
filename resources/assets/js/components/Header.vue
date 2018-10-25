<template>
    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="#" class="logo">
                <img src="/images/logo.png" height="35" alt="">
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Поиск...">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
						</span>
                </div>
            </form>

            <span class="separator"></span>

            <ul class="notifications">

                <li class="">
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>Уведомления
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>


                            </ul>


                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown" aria-expanded="false">
                    <figure class="profile-picture">
                        <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg">
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i>Профиль</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i>Блокировка</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i>Выход</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <!--<div class="sidebar" data-color="azure" data-background-color="black" data-image="https://demos.creative-tim.com/material-dashboard/assets/img/sidebar-3.jpg">-->

    <!--<div class="logo">-->
    <!--<a href="#" class="simple-text logo-normal">-->
    <!--Autokipr TM-->
    <!--</a>-->
    <!--</div>-->
    <!--<div class="sidebar-wrapper">-->
    <!--<ul class="nav">-->

    <!--<li class="nav-item" @click="activateRoute('potential')" :class="{active : active == 'potential' }">-->
    <!--<router-link class="nav-link" :to="{name:'potential'}">-->
    <!--<i class="material-icons">assignment_ind</i>-->
    <!--<p>Потенциальные клиенты</p>-->
    <!--</router-link>-->
    <!--</li>-->
    <!--<li class="nav-item" @click="activateRoute('active')" :class="{active : active == 'active' }">-->
    <!--<router-link class="nav-link" :to="{name:'active'}">-->
    <!--<i class="material-icons">group_add</i>-->
    <!--<p>Действующие клиенты</p>-->
    <!--</router-link>-->
    <!--</li>-->
    <!--<li class="nav-item" @click="activateRoute('stat')" :class="{active : active == 'stat' }">-->
    <!--<router-link class="nav-link" :to="{name:'stat'}">-->
    <!--<i class="material-icons">poll</i>-->
    <!--<p>Статистика</p>-->
    <!--</router-link>-->
    <!--</li>-->
    <!--<li class="nav-item" @click="activateRoute('stock')" :class="{active : active == 'stock' }">-->
    <!--<router-link class="nav-link" :to="{name:'stock'}">-->
    <!--<i class="material-icons">drive_eta</i>-->
    <!--<p>Склад</p>-->
    <!--</router-link>-->
    <!--</li>-->
    <!--<li class="nav-item" @click="activateRoute('employ')" :class="{active : active == 'employ' }">-->
    <!--<router-link class="nav-link" :to="{name:'employ'}">-->
    <!--<i class="material-icons">supervisor_account</i>-->
    <!--<p>Сотрудники</p>-->
    <!--</router-link>-->
    <!--</li>-->

    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
</template>

<script>
    export default {
        data() {
            return {
                active: "potential"
            }
        },
        mounted() {
            this.activateRoute(this.$router.currentRoute.name);
        },
        methods: {
            activateRoute(name) {
                this.active = name;
            }
        }
    }
</script>