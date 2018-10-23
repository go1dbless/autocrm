<template>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="#">
                            АвтоКипр
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy; {{year}}, АвтоКипр. All Rights Reserved.
            </div>
            <!-- your footer here -->
        </div>
    </footer>
</template>

<script>

    export default {
        data() {
            return {
                year: new Date().getFullYear(),
            }
        },
    }
</script>