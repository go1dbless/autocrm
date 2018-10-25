<template>
    <section class="body">

        <header-vue></header-vue>

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">Меню</div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                         data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano has-scrollbar">
                    <div class="nano-content" tabindex="0" style="margin-right: -15px;">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <hr class="separator">

                        <div class="sidebar-widget widget-stats">
                            <div class="widget-header">
                                <h6>Краткая статистика</h6>
                                <div class="widget-toggle">+</div>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="stats-title">Stat 1</span>
                                        <span class="stats-complete">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-without-number"
                                                 role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 85%;">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nano-pane" style="display: block; opacity: 1; visibility: visible;">
                        <div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div>
                    </div>
                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Заголовок</h2>


                </header>

                <!-- start: page -->

                <!-- end: page -->
            </section>
        </div>



    </section>

</template>

<script>
    import MainPanel from './NavBar';
    import HeaderVue from './Header';
    import Content_space from './Content';
    import NavBarVue from './NavBar';
    import FooterVue from './Footer';

    export default {
        components: {MainPanel, Content_space, HeaderVue, NavBarVue, FooterVue},
        data() {
            return {
                title: ""
            }
        },
        methods: {
            getTitle() {
              var name = this.$router.currentRoute.name;

              if(name === 'potential') this.title = 'Потенциальные клиенты';
              if(name === 'active') this.title = 'Действующие клиенты';
              if(name === 'stat') this.title = 'Статистика';
              if(name === 'stock') this.title = 'Склад';
              if(name === 'employ') this.title = 'Сотрудники';
            }
        },
        mounted() {
            this.getTitle();
        },
        watch: {
            '$route'() {
                this.getTitle();
            }
        }
    }
</script>