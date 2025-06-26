import './App.css'
import axios from "axios";
import {useState} from "react";

const App = () => {


    const [succecMesage, setSuccecMesage] = useState('')
        const sendOTPSms = async () => {
            const response = await axios.post('http://127.0.0.1:8000/api/send-otp')

            console.log(response)

            if (response.status ===200){
                setSuccecMesage(response.data.message)
            }
        }

  return (
      <>
          {succecMesage && <p className="text-green-500">{succecMesage}</p> }

          <button type="button"
                  onClick={sendOTPSms}
                  className="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
              Send OTP
          </button>

      </>
  )
}

export default App
