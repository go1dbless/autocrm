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
                                        <label>Коментарий</label>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Несколько слов о сотруднике (необязательно)</label>
                                            <textarea class="form-control" rows="3" v-model="newUser.comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button  class="btn btn-dark pull-right" @click="newEmployFormVisible = false">Отмена</button>
                            <button  class="btn btn-success pull-right" @click="saveUser">Сохранить</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-info pull-right" @click="newEmployFormVisible = !newEmployFormVisible" v-if="!newEmployFormVisible">Добавить сотрудника</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Список</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>ФИО</th>
                                    <th>Должность</th>
                                    <th>Дата рождения</th>
                                    <th>Принят</th>
                                    <th>Статус</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="u in users">
                                    <td>{{u.name}}</td>
                                    <td>{{u.post}}</td>
                                    <td>{{u.birth}}</td>
                                    <td>{{u.accepted}}</td>
                                    <td>{{u.status}}</td>
                                    <td></td>
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
                users: [
                    {
                        'name': 'Иванов Иван Иванович',
                        'post': 'Менеджер',
                        'birth': '16.05.1996',
                        'accepted': '16.05.1996',
                        'comment': 'Текст комментария по сотруднику. Его можно не заполнять, просто возможно это будет полезно при большом количестве кадров',
                        'status': 'Активен',
                    },
                ],
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
        methods: {
            saveUser() {
                var users = this.users;
                axios.post('save-user', this.newUser)
                    .then(
                        (response) => {
                            var res = response.data;
                            users.push(res);
                            console.log(res)
                        })
            }
        }
    }
</script>
