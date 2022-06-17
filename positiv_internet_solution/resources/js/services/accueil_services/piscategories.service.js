import axios from 'axios';
import apiPath from "../../helper/api";

class PiscategoriesService {
  async getCategories(data) {
    return  await axios.get(apiPath.path+'categories'+data , { 
      //headers: {'Authorization': 'Bearer ' + auth.getSession()}
    });
    
  }
}

export default new PiscategoriesService();