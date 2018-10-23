<template>
    <div class="wrapper ">

        <sidebar></sidebar>

        <div class="main-panel">

            <!-- Navbar -->
            <nav-bar-vue :title="title"></nav-bar-vue>
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
            </div>

            <footer-vue></footer-vue>

        </div>
    </div>
</template>

<script>
    import MainPanel from './NavBar';
    import Sidebar from './Sidebar';
    import Content_space from './Content';
    import NavBarVue from './NavBar';
    import FooterVue from './Footer';

    export default {
        components: {MainPanel, Content_space, Sidebar, NavBarVue, FooterVue},
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