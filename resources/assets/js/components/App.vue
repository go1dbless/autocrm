<template>
    <div class="wrap">
        <top></top>
        <content_space></content_space>
    </div>
</template>

<script>
    import Top from './Top';
    import Content_space from './Content';

    export default {
        components: {Top, Content_space}
    }
</script>