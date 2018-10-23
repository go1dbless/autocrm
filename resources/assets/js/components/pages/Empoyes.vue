<template>
    <div>
        <div class="row" v-show="newEmployFormVisible">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">ФИО *</label>
                                        <input type="text" class="form-control" v-model="newUser.name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Логин *</label>
                                        <input type="text" class="form-control" v-model="newUser.login">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Пароль *</label>
                                        <input type="password" class="form-control" v-model="newUser.password">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Должность *</label>
                                        <input type="text" class="form-control" v-model="newUser.post">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Несколько слов о сотруднике
                                                (необязательно)</label>
                                            <textarea class="form-control" rows="3"
                                                      v-model="newUser.comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark pull-right" @click="newEmployFormVisible = false">Отмена
                            </button>
                            <button class="btn btn-success pull-right" @click="saveUser">Сохранить</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-info pull-right"
                        @click="newEmployFormVisible = !newEmployFormVisible" v-if="!newEmployFormVisible">Добавить
                    сотрудника
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Список</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>ФИО</th>
                                    <th>Должность</th>
                                    <th>Принят</th>
                                    <th>Статус</th>
                                    <th style="width: 100px;">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="u in users">
                                    <td>{{u.name}}</td>
                                    <td>{{u.post}}</td>
                                    <td>{{u.accepted}}</td>
                                    <td>{{u.status}}</td>
                                    <td class="text-center">
                                        <i class="material-icons cursor-pointer" @click="deleteUser(u.id)">clear</i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
    import axios from "axios";

    export default {
        data() {
            return {
                users: [],
                newEmployFormVisible: false,
                newUser: {
                    name: '',
                    login: '',
                    password: '',
                    comment: '',
                    post: ''
                }
            }
        },
        mounted() {
            this.getUserList();
        },
        methods: {
            deleteUser(id) {
                if (confirm('Вы действительно хотите удалить пользователя?')) {
                    axios.post('/employ/delete', {id:id})
                        .then(
                            (response) => {
                                var res = response.data;
                                $.notify({
                                    icon: "add_alert",
                                    message: res.message
                                }, {
                                    type: "success",
                                    timer: 3e3,
                                    placement: {
                                        from: "bottom",
                                        align: "right"
                                    }
                                });
                                this.getUserList();
                            })
                }
            },
            getUserList() {
                var users = this.users;
                axios.get('/employ/user-list').then(
                    (response) => {
                        this.users = response.data;
                    })
            },
            saveUser() {
                axios.post('/employ/save-user', this.newUser)
                    .then(
                        (response) => {
                            var res = response.data;

                            if (!res.errors) {
                                this.newEmployFormVisible = false;
                                $.notify({
                                    icon: "add_alert",
                                    message: res.message
                                }, {
                                    type: "success",
                                    timer: 3e3,
                                    placement: {
                                        from: "bottom",
                                        align: "right"
                                    }
                                });
                                this.getUserList();
                            } else {
                                $.notify({
                                    icon: "add_alert",
                                    message: res.message
                                }, {
                                    type: "danger",
                                    timer: 3e3,
                                    placement: {
                                        from: "bottom",
                                        align: "right"
                                    }
                                })
                            }
                        })
            }
        }
    }
</script>

<style>
    .cursor-pointer {
        cursor: pointer;
    }
</style>
