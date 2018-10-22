<template>
    <div class="sidebar" data-color="purple" data-background-color="white">

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Autokipr TM
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item" @click="activateRoute('potential')" :class="{active : active == 'potential' }">
                    <router-link class="nav-link" :to="{name:'potential'}">
                        <i class="material-icons">assignment_indл</i>
                        <p>Потенциальные клиенты</p>
                    </router-link>
                </li>
                <li class="nav-item" @click="activateRoute('active')" :class="{active : active == 'active' }">
                    <router-link class="nav-link" :to="{name:'active'}">
                        <i class="material-icons">group_add</i>
                        <p>Действующие клиенты</p>
                    </router-link>
                </li>
                <li class="nav-item" @click="activateRoute('stat')" :class="{active : active == 'stat' }">
                    <router-link class="nav-link" :to="{name:'stat'}">
                        <i class="material-icons">poll</i>
                        <p>Статистика</p>
                    </router-link>
                </li>
                <li class="nav-item" @click="activateRoute('stock')" :class="{active : active == 'stock' }">
                    <router-link class="nav-link" :to="{name:'stock'}">
                        <i class="material-icons">drive_eta</i>
                        <p>Склад</p>
                    </router-link>
                </li>
                <li class="nav-item" @click="activateRoute('employ')" :class="{active : active == 'employ' }">
                    <router-link class="nav-link" :to="{name:'employ'}">
                        <i class="material-icons">supervisor_account</i>
                        <p>Сотрудники</p>
                    </router-link>
                </li>

            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                active:"potential"
            }
        },
        mounted() {
            console.log(this.$router.currentRoute.name);
        },
        methods: {
            activateRoute(name) {
                this.active = name;
            }
        }
    }
</script>