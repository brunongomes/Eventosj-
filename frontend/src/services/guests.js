import { http } from './config'

export default {

    guestList: () => {
        return http.get('guests/');
    },

    guestListEvent: (desc) => {
        return http.get('guests/'+ desc);
    },

    registerGuest: (guest) => {
        return http.post('guests/create', guest)
    },

    deletGuest: (guest) =>{
        return http.delete('/guests/' + guest.id, {data: guest});
    },

    updateGuest: (guest) => {
        return http.put('/guests/' + guest.id, guest);
    }
}