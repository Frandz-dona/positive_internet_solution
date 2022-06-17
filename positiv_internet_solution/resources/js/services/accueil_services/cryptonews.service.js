import axios from 'axios';
import apiPath from "../../helper/api";

class CryptoNews {
  async getTopics(data) {
    return  await axios.get(apiPath.path+'topics'+data , { 
      //headers: {'Authorization': 'Bearer ' + auth.getSession()}
    });
    
  }
}

export default new CryptoNews();