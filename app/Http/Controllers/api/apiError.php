<?php

namespace App\api;

		class ApiError
		{
			public static function errorMessage($message,$code)
			{		
					return[
							'msg' => $message,
							'code' => $code
					];
			}
		}