import axios from 'axios';
import apiPath from "../../helper/api";

class CourseService {
  async getCourses(data) {
    return  await axios.get(apiPath.path+'courses'+data , { 
      //headers: {'Authorization': 'Bearer ' + auth.getSession()}
    });
    
  }
}

export default new CourseService();