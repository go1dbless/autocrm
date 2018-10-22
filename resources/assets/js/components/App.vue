<template>
    <div class="wrapper ">

        <sidebar></sidebar>

        <div class="main-panel">

            <!-- Navbar -->
            <nav-bar-vue title="asdsadq32222"></nav-bar-vue>
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
                year: new Date().getFullYear(),
                title:""
            }
        },
    }
</script>