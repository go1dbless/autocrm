<template>
    <div class="content">
        <div class="left">
            <router-link :to="{name:'potential'}" class="menu-item">Потенциальные клиенты</router-link>
            <router-link :to="{name:'active'}" class="menu-item">Действующие клиенты</router-link>
            <router-link :to="{name:'stat'}" class="menu-item">Статистика</router-link>
            <router-link :to="{name:'stock'}" class="menu-item">Склад</router-link>
            <router-link :to="{name:'employ'}" class="menu-item">Сотрудники</router-link>
        </div>
        <div class="right">
            <router-view></router-view>
        </div>
    </div>
</template>