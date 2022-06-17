<template>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12" v-for="element in data" :key="element.id">
                    <!-- Single Team -->
                    <div class="single-team one default">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img :src="topicImgUrl+element.cover" alt="#">
                            <div class="t-hover">
                                <ul class="t-social">
                                   <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom" style="padding: 5px;">
                            <div class="t-icon">
                                <a href="#"><i class="fa fa-share"></i></a>
                            </div>
                            <h2 class="t-name">
                                <a :href="topicDetailUrl+element.pluck" style="color: #353535;">{{truncate(element.title, 40, '...')}}</a>
                            </h2> <br>
                            <p class="what" style="padding-bottom: 10px;">
                                <span class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">{{element.category.name}}</span>
                                <span style="margin-left: 1px; font-size: 14px;">{{element.created_at | formatDate}}</span>
                            </p>
                            <!-- <div class="meta">
                                <span><i class="fa fa-calendar-o"></i> {{element.created_at | formatDate}}</span>
                            </div> -->
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        
</template>

<script>
import {_buildQuery} from "../../helper/api";
import NewsService from "../../services/accueil_services/cryptonews.service";
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
            topicImgUrl: appPath.url+'storage/',
            topicDetailUrl: appPath.web_url+'topics/',
        };
    },
    mounted() {
        this.loadCryptonews();
    },
    methods: {
        async loadCryptonews() {
            NewsService.getTopics(_buildQuery(this.param)).then(
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
