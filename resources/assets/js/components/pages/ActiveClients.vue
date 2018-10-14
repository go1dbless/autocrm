<template>
    <div class="main">
        <div class="mini-card" v-for="c in clients" :class="'status-'+c.status">
            <div class="top-data">
                <div class="name">{{c.name}}</div> <div class="date">22.05.2016</div>
            </div>
            <div class="add">
                <div class="comment-text">Текст комментария</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                clients: [
                    {
                        'name': 'Сергей',
                    },
                    {
                        'name': 'Иван',
                        'status':'red'
                    },
                    {
                        'name': 'Николай',
                        'status':'blue'
                    },
                    {
                        'name': 'Андрей',
                        'status':'green'
                    },
                    {
                        'name': 'Кирилл',
                        'status':'yellow'
                    },
                ]
            }
        }
    }
</script>
