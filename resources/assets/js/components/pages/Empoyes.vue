<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Список</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
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
                axios.post('save-user', this.newUser)
                    .then(
                        (response) => {
                            var res = response.data;
                            console.log(res)
                        })
            }
        }
    }
</script>
