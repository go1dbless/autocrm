<template>
    <div>
        <div class="employ-top">
            <button @click="newEployFormVisible = true">
                Добавить сотрудника <li class="fa fa-plus"></li>
            </button>
        </div>
        <div class="main-employ">
            <div class="employ-card" v-for="u in users">
                <div class="buttons">
                    <li class="fa fa-pencil"></li>
                    <li class="fa fa-ban"></li>
                    <li class="fa fa-remove"></li>
                </div>
                <div class="name">{{u.name}}</div>
                <span>{{u.post}}</span>
                <span>Дата рождения: {{u.birth}}</span>
                <span>Принят: {{u.accepted}}</span>
                <span>Статус: {{u.status}}</span>
                <div class="comment">{{u.comment}}</div>
            </div>

            <div class="false-plank" v-if="newEployFormVisible"></div>
            <div class="new-employ" v-if="newEployFormVisible">
                <span>Новый сотрудник</span>
                <input type="text" class="input" placeholder="ФИО">
                <select name="post">
                    <option selected disabled>Должность</option>
                    <option value="manager">Менеджер</option>
                </select>
                <input type="text" class="input" placeholder="Коментарий">
                <button>Сохранить</button>
                <button @click="newEployFormVisible = false">Отмена</button>
            </div>
        </div>
    </div>
</template>

<script>
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
                newEployFormVisible: false
            }
        }
    }
</script>
