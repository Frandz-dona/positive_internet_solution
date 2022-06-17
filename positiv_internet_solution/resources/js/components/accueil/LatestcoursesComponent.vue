<template>
    <div>
        <div class="single-post" v-for="element in data" :key="element.id">
            <div class="post-img">
                <img :src="ImgUrl+element.cover" alt="" />
            </div>
            <div class="post-info">
                <p>{{element.created_at | formatDate}}</p>
                <h4><a :href="DetailUrl+element.pluck">{{truncate(element.title, 30, '...')}}</a></h4>
            </div>
        </div> 
    </div>
</template>

<script>
import {_buildQuery} from "../../helper/api";
import CourseService from "../../services/accueil_services/courses.service";
import appPath from "../../helper/api";

export default {
    data() {
        return {
            param: {
            limit: 4,
            sort_direction: 'desc',
                    //blocked: 1,
                    //validated: 1              
            },
            data: [],
            ImgUrl: appPath.url+'storage/',
            DetailUrl: appPath.web_url+'couses/',
        };
    },
    mounted() {
        this.loadLatestnews();
    },
    methods: {
        async loadLatestnews() {
            CourseService.getCourses(_buildQuery(this.param)).then(
                response => {
                    this.data = response.data;
                    console.log(this.data)
                },
                error => {
                    this.content =
                        (error.response &&
                            error.response.data &&
                            error.response.data.message) ||
                        error.message ||
                        error.toString();
                }
            );
        },
        truncate: function (text, length, suffix) {
                if (text.length > length) {
                    return text.substring(0, length) + suffix;
                } else {
                    return text;
                }
            }
    }
};
</script>
<style>

</style>
