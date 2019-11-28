<template>
    <div id="main">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap" v-if="$auth.check()">
                    <a href="#" @click.prevent="$auth.logout()">Sign out</a>
                </li>
                <li v-else>
                    <router-link class="nav-link" :to="{name: 'login'}">Вход</router-link>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                    <span data-feather="home"></span>
                                    <router-link class="nav-link" :to="{name: 'register'}">
                                        Регистрация <span class="sr-only">(current)</span>
                                    </router-link>
                            </li>
                            <li class="nav-item">
                                    <span data-feather="shopping-cart"></span>
                                    <router-link class="nav-link active" :to="{name:'projects'}">Проекты</router-link>
                            </li>
                            <li class="nav-item">
                                <span data-feather="shopping-cart"></span>
                                <router-link class="nav-link" :to="{name:'imported'}">Импортированные Проекты</router-link>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="container-fluid">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                //
            }
        },
        components: {
            //
        }
    }
</script>