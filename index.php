<?php if(isset($_SESSION["username"])) {
  header("Location: dashboard.php");
  exit;
} ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Cinetrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/style.css" />
  <link rel="icon" type="image/x-icon" href="/favico.ico">
</head>
<body>
  <header>
    <svg width="332.414" height="45.704" viewBox="0 0 332.414 45.704" xmlns="http://www.w3.org/2000/svg"><g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#eeeeee" stroke-width="0.25mm" fill="#eeeeee" style="stroke:#eeeeee;stroke-width:0.25mm;fill:#eeeeee"><path d="M 116.543 30.139 L 116.543 34.735 L 134.037 34.735 L 134.037 36.563 L 116.543 36.563 L 116.543 38.391 L 134.037 38.391 L 134.037 40.219 L 116.543 40.219 L 116.543 42.047 L 134.037 42.047 L 134.037 43.876 L 114.715 43.876 L 114.715 7.313 L 134.037 7.313 L 134.037 9.141 L 116.543 9.141 L 116.543 10.969 L 134.037 10.969 L 134.037 12.797 L 116.543 12.797 L 116.543 14.626 L 134.037 14.626 L 134.037 16.454 L 116.543 16.454 L 116.543 20.999 L 133.022 20.999 L 133.022 22.827 L 116.543 22.827 L 116.543 24.655 L 133.022 24.655 L 133.022 26.483 L 116.543 26.483 L 116.543 28.311 L 133.022 28.311 L 133.022 30.139 L 116.543 30.139 Z M 144.93 10.969 L 137.617 10.969 L 137.617 9.141 L 165.039 9.141 L 165.039 10.969 L 157.727 10.969 L 157.727 43.876 L 155.899 43.876 L 155.899 10.969 L 154.07 10.969 L 154.07 43.876 L 152.242 43.876 L 152.242 10.969 L 150.414 10.969 L 150.414 43.876 L 148.586 43.876 L 148.586 10.969 L 146.758 10.969 L 146.758 43.876 L 144.93 43.876 L 144.93 10.969 Z M 182.99 35.547 L 182.99 33.719 L 194.01 33.719 Q 197.387 33.719 200.256 32.094 A 12.292 12.292 0 0 0 204.839 27.575 A 12.325 12.325 0 0 0 206.553 21.176 A 11.212 11.212 0 0 0 204.852 15.222 A 12.587 12.587 0 0 0 200.243 10.792 Q 197.336 9.141 194.01 9.141 L 171.006 9.141 L 171.006 43.876 L 169.178 43.876 L 169.178 7.313 L 194.01 7.313 A 13.956 13.956 0 0 1 199.532 8.443 A 15.294 15.294 0 0 1 203.204 10.631 A 14.022 14.022 0 0 1 204.115 11.439 Q 206.045 13.305 207.213 15.87 Q 208.381 18.434 208.381 21.176 A 16.396 16.396 0 0 1 207.881 25.307 A 13.276 13.276 0 0 1 206.35 28.933 A 13.325 13.325 0 0 1 200.891 33.973 L 204.725 43.876 L 202.77 43.876 L 199.139 34.709 Q 198.453 34.938 197.539 35.167 L 200.967 43.876 L 199.012 43.876 L 195.66 35.471 A 16.591 16.591 0 0 1 194.437 35.543 A 18.931 18.931 0 0 1 194.01 35.547 L 197.234 43.876 L 195.305 43.876 L 192.106 35.547 L 190.455 35.547 L 193.527 43.876 L 191.598 43.876 L 188.5 35.547 L 182.99 35.547 Z M 251.164 25.848 L 251.164 43.876 L 249.336 43.876 L 249.336 25.848 Q 249.336 20.668 246.924 16.593 A 16.57 16.57 0 0 0 240.348 10.296 A 19.056 19.056 0 0 0 232.4 8.114 A 22.838 22.838 0 0 0 231.055 8.075 A 17.698 17.698 0 0 0 222.041 10.436 Q 217.953 12.797 215.617 16.822 A 17.169 17.169 0 0 0 213.281 25.594 A 17.48 17.48 0 0 0 214.284 31.523 A 16.759 16.759 0 0 0 216.011 35.045 A 14.805 14.805 0 0 0 217.026 36.423 A 18.774 18.774 0 0 0 221.038 40.042 A 18.052 18.052 0 0 0 225.939 42.352 A 18.532 18.532 0 0 0 231.283 43.139 A 14.404 14.404 0 0 0 236.971 41.997 L 236.971 43.876 Q 234.152 44.866 231.182 44.866 A 20.895 20.895 0 0 1 225.202 44.002 A 19.183 19.183 0 0 1 219.819 41.451 A 20.551 20.551 0 0 1 215.465 37.464 A 16.942 16.942 0 0 1 212.958 33.242 A 19.899 19.899 0 0 1 212.52 32.094 A 19.674 19.674 0 0 1 211.453 25.621 A 21.851 21.851 0 0 1 211.453 25.594 A 19.326 19.326 0 0 1 212.939 18.091 A 19.174 19.174 0 0 1 216.683 12.25 A 18.41 18.41 0 0 1 217.001 11.921 A 18.595 18.595 0 0 1 222.127 8.289 A 21.764 21.764 0 0 1 223.247 7.783 Q 226.916 6.247 231.055 6.247 A 22.164 22.164 0 0 1 238.013 7.326 A 20.873 20.873 0 0 1 238.977 7.668 A 19.9 19.9 0 0 1 243.966 10.423 A 18.217 18.217 0 0 1 245.375 11.617 A 17.604 17.604 0 0 1 249.197 16.895 A 20.643 20.643 0 0 1 249.615 17.825 A 20.048 20.048 0 0 1 251.126 24.507 A 23.517 23.517 0 0 1 251.164 25.848 Z M 41.742 10.004 L 40.219 10.995 Q 37.324 6.754 32.741 4.292 Q 28.158 1.829 22.852 1.829 A 20.588 20.588 0 0 0 14.689 3.492 A 21.368 21.368 0 0 0 8.88 7.121 A 20.08 20.08 0 0 0 7.973 7.973 A 20.942 20.942 0 0 0 3.704 14.206 A 23.883 23.883 0 0 0 3.491 14.689 A 20.588 20.588 0 0 0 1.828 22.852 A 20.588 20.588 0 0 0 3.491 31.015 A 21.368 21.368 0 0 0 7.12 36.824 A 20.08 20.08 0 0 0 7.973 37.731 A 20.942 20.942 0 0 0 14.206 42 A 23.883 23.883 0 0 0 14.689 42.212 A 20.588 20.88 0 0 0 22.852 43.876 A 20.475 20.475 0 0 0 32.754 41.387 Q 37.35 38.899 40.244 34.659 L 41.717 35.776 A 22.881 22.881 0 0 1 33.592 43.025 A 22.31 22.31 0 0 1 22.852 45.704 Q 18.205 45.704 13.978 43.888 A 23.346 23.346 0 0 1 7.675 39.939 A 21.926 21.926 0 0 1 6.691 39.013 Q 3.631 35.954 1.816 31.726 A 22.257 22.257 0 0 1 0 22.852 Q 0 18.206 1.816 13.978 A 23.346 23.346 0 0 1 5.765 7.676 A 21.926 21.926 0 0 1 6.691 6.691 Q 9.75 3.631 13.978 1.816 A 22.257 22.257 0 0 1 22.852 0.001 A 22.276 22.276 0 0 1 33.617 2.692 Q 38.594 5.383 41.742 10.004 Z M 247.508 25.848 L 247.508 43.876 L 245.68 43.876 L 245.68 25.848 Q 245.68 21.659 243.763 18.421 A 12.875 12.875 0 0 0 238.52 13.458 Q 235.193 11.731 231.055 11.731 A 14.173 14.173 0 0 0 223.869 13.597 A 13.599 13.599 0 0 0 218.778 18.637 A 13.62 13.62 0 0 0 216.938 25.594 A 15.351 15.351 0 0 0 217.392 29.388 A 13.267 13.267 0 0 0 218.131 31.523 A 13.05 13.05 0 0 0 219.892 34.434 A 11.348 11.348 0 0 0 221.343 35.928 A 15.005 15.005 0 0 0 225.939 38.607 A 15.444 15.444 0 0 0 231.334 39.559 Q 234.203 39.559 236.971 38.366 L 236.971 40.219 A 16.998 16.998 0 0 1 233.304 41.17 A 14.695 14.695 0 0 1 231.283 41.311 Q 226.891 41.311 223.209 39.331 A 15.245 15.245 0 0 1 217.318 33.719 A 15.266 15.266 0 0 1 215.112 25.874 A 18.124 18.124 0 0 1 215.109 25.594 Q 215.109 22.395 216.341 19.501 A 15.725 15.725 0 0 1 219.42 14.765 A 15.082 15.082 0 0 1 219.68 14.499 A 15.362 15.362 0 0 1 224.006 11.482 A 17.874 17.874 0 0 1 224.758 11.147 Q 227.729 9.903 231.055 9.903 A 18.77 18.77 0 0 1 236.383 10.638 A 16.522 16.522 0 0 1 239.446 11.883 Q 243.192 13.864 245.35 17.52 A 15.624 15.624 0 0 1 247.444 24.272 A 19.167 19.167 0 0 1 247.508 25.848 Z M 290.545 13.051 L 289.072 14.143 A 18.42 18.42 0 0 0 282.788 9.141 Q 279.068 7.313 274.828 7.313 Q 271.121 7.313 267.732 8.76 Q 264.342 10.208 261.892 12.658 A 18.221 18.221 0 0 0 258.179 18.078 A 20.794 20.794 0 0 0 257.994 18.498 Q 256.547 21.887 256.547 25.594 Q 256.547 29.301 257.994 32.691 Q 259.442 36.081 261.892 38.531 A 18.221 18.221 0 0 0 267.312 42.243 A 20.794 20.794 0 0 0 267.732 42.428 Q 271.121 43.876 274.828 43.876 A 17.806 17.806 0 0 0 282.788 42.047 A 18.42 18.42 0 0 0 289.072 37.045 L 290.52 38.163 A 20.229 20.229 0 0 1 283.601 43.685 A 19.598 19.598 0 0 1 274.828 45.704 Q 270.74 45.704 267.021 44.104 Q 263.301 42.504 260.609 39.813 A 20.159 20.159 0 0 1 256.523 33.863 A 22.998 22.998 0 0 1 256.318 33.402 Q 254.719 29.682 254.719 25.594 Q 254.719 21.506 256.318 17.787 Q 257.918 14.067 260.609 11.376 A 20.159 20.159 0 0 1 266.56 7.289 A 22.998 22.998 0 0 1 267.021 7.084 Q 270.74 5.485 274.828 5.485 A 19.678 19.678 0 0 1 283.613 7.503 A 20.067 20.067 0 0 1 290.545 13.051 Z M 182.99 31.891 L 182.99 30.063 L 194.01 30.063 A 8.777 8.777 0 0 0 200.281 27.575 A 8.307 8.307 0 0 0 202.879 21.808 A 11.192 11.192 0 0 0 202.897 21.176 A 7.631 7.631 0 0 0 200.855 15.968 A 10.435 10.435 0 0 0 200.231 15.324 Q 197.565 12.797 194.01 12.797 L 174.662 12.797 L 174.662 43.876 L 172.834 43.876 L 172.834 10.969 L 194.01 10.969 A 10.521 10.521 0 0 1 201.525 14.029 A 10.819 10.819 0 0 1 203.712 16.903 A 9.23 9.23 0 0 1 204.725 21.176 A 10.85 10.85 0 0 1 203.91 25.432 A 10.253 10.253 0 0 1 201.564 28.819 Q 198.402 31.891 194.01 31.891 L 182.99 31.891 Z M 38.746 12.086 L 37.223 13.077 Q 34.836 9.573 31.04 7.529 A 17.005 17.005 0 0 0 22.852 5.485 Q 19.322 5.485 16.098 6.856 A 17.652 17.652 0 0 0 11.453 9.713 A 16.462 16.462 0 0 0 10.55 10.55 A 17.212 17.212 0 0 0 7.053 15.649 A 19.714 19.714 0 0 0 6.856 16.098 Q 5.484 19.323 5.484 22.852 Q 5.484 26.381 6.856 29.606 A 17.652 17.652 0 0 0 9.712 34.251 A 16.462 16.462 0 0 0 10.55 35.154 A 17.212 17.212 0 0 0 15.649 38.651 A 19.714 19.714 0 0 0 16.098 38.848 Q 19.322 40.219 22.852 40.219 A 16.899 16.899 0 0 0 31.053 38.163 Q 34.836 36.106 37.223 32.602 L 38.695 33.694 Q 36.055 37.553 31.878 39.8 A 18.756 18.756 0 0 1 22.852 42.047 A 18.762 18.762 0 0 1 13.229 39.47 Q 8.811 36.893 6.234 32.475 A 18.762 18.762 0 0 1 3.656 22.852 A 18.762 18.762 0 0 1 6.234 13.229 Q 8.811 8.811 13.229 6.234 A 18.762 18.762 0 0 1 22.852 3.657 Q 27.727 3.657 31.916 5.929 A 19.2 19.2 0 0 1 38.746 12.086 Z M 243.852 25.848 L 243.852 43.876 L 242.024 43.876 L 242.024 25.848 A 12.138 12.138 0 0 0 241.592 22.526 A 9.135 9.135 0 0 0 238.951 18.218 A 10.56 10.56 0 0 0 233.22 15.543 A 14.557 14.557 0 0 0 231.055 15.387 Q 226.586 15.387 223.59 18.358 A 9.791 9.791 0 0 0 220.595 25.461 A 12.058 12.058 0 0 0 220.594 25.594 A 12.779 12.779 0 0 0 220.848 28.195 A 10.29 10.29 0 0 0 221.495 30.241 A 9.405 9.405 0 0 0 222.636 32.197 A 7.809 7.809 0 0 0 223.945 33.542 Q 225.494 34.786 227.411 35.433 A 12.566 12.566 0 0 0 231.444 36.081 A 13.874 13.874 0 0 0 231.461 36.081 A 11.882 11.882 0 0 0 236.971 34.735 L 236.971 36.665 A 14.497 14.497 0 0 1 232.394 37.773 A 13.62 13.62 0 0 1 231.436 37.807 A 14.622 14.622 0 0 1 226.662 37.033 Q 224.402 36.258 222.625 34.773 A 9.888 9.888 0 0 1 220.373 32.045 A 12.134 12.134 0 0 1 219.807 30.914 Q 218.766 28.54 218.766 25.594 Q 218.766 20.592 222.308 17.076 Q 225.85 13.559 231.055 13.559 Q 234.711 13.559 237.606 15.044 Q 240.5 16.53 242.176 19.348 A 11.95 11.95 0 0 1 243.766 24.224 A 14.993 14.993 0 0 1 243.852 25.848 Z M 287.701 15.336 L 286.279 16.479 Q 284.223 13.915 281.227 12.442 Q 278.231 10.969 274.828 10.969 A 14.296 14.296 0 0 0 269.153 12.125 Q 266.449 13.28 264.482 15.248 Q 262.514 17.215 261.359 19.919 Q 260.203 22.624 260.203 25.594 A 14.296 14.296 0 0 0 261.359 31.269 Q 262.514 33.973 264.482 35.941 Q 266.449 37.909 269.153 39.064 Q 271.858 40.219 274.828 40.219 Q 278.231 40.219 281.227 38.747 Q 284.223 37.274 286.279 34.709 L 287.65 35.903 A 16.447 16.447 0 0 1 281.988 40.41 A 16.095 16.095 0 0 1 274.828 42.047 A 16.056 16.056 0 0 1 268.43 40.74 A 16.856 16.856 0 0 1 264.045 38.032 A 15.689 15.689 0 0 1 263.187 37.236 Q 260.99 35.04 259.683 31.993 A 16.056 16.056 0 0 1 258.375 25.594 A 16.056 16.056 0 0 1 259.683 19.196 A 16.856 16.856 0 0 1 262.39 14.811 A 15.689 15.689 0 0 1 263.187 13.953 Q 265.383 11.756 268.43 10.449 A 16.056 16.056 0 0 1 274.828 9.141 Q 278.662 9.141 282.026 10.792 Q 285.391 12.442 287.701 15.336 Z M 83.992 43.876 L 64.645 10.461 L 64.645 43.876 L 62.817 43.876 L 62.817 7.313 L 65 7.313 L 86.1 43.876 L 83.992 43.876 Z M 96.815 43.876 L 75.715 7.313 L 77.848 7.313 L 97.145 40.702 L 97.145 7.313 L 98.973 7.313 L 98.973 43.876 L 96.815 43.876 Z M 182.99 28.235 L 182.99 26.407 L 194.01 26.407 Q 196.193 26.407 197.717 25.036 A 4.474 4.474 0 0 0 199.106 22.555 A 6.715 6.715 0 0 0 199.24 21.176 Q 199.24 19.348 197.653 17.901 A 5.25 5.25 0 0 0 194.01 16.454 L 178.318 16.454 L 178.318 43.876 L 176.49 43.876 L 176.49 14.626 L 194.01 14.626 A 7.009 7.009 0 0 1 198.948 16.606 A 7.205 7.205 0 0 1 200.311 18.298 A 5.72 5.72 0 0 1 201.068 21.176 A 8.176 8.176 0 0 1 200.767 23.454 A 6.195 6.195 0 0 1 199.012 26.318 Q 196.955 28.235 194.01 28.235 L 182.99 28.235 Z M 35.699 14.118 L 34.176 15.108 A 13.692 13.692 0 0 0 29.314 10.753 A 13.378 13.378 0 0 0 22.852 9.141 A 13.39 13.39 0 0 0 15.971 10.982 Q 12.822 12.823 10.982 15.971 A 13.39 13.39 0 0 0 9.141 22.852 A 13.39 13.39 0 0 0 10.982 29.733 Q 12.822 32.881 15.971 34.722 A 13.39 13.39 0 0 0 22.852 36.563 Q 26.33 36.563 29.326 34.938 A 13.684 13.684 0 0 0 34.201 30.545 L 35.699 31.586 A 15.392 15.392 0 0 1 30.177 36.563 Q 26.787 38.391 22.852 38.391 A 15.234 15.234 0 0 1 15.057 36.309 Q 11.477 34.227 9.395 30.647 A 15.234 15.234 0 0 1 7.313 22.852 A 15.234 15.234 0 0 1 9.395 15.057 Q 11.477 11.477 15.057 9.395 A 15.234 15.234 0 0 1 22.852 7.313 Q 26.787 7.313 30.177 9.141 A 15.392 15.392 0 0 1 35.699 14.118 Z M 238.367 43.876 L 238.367 25.848 A 8.444 8.444 0 0 0 238.13 23.788 A 5.725 5.725 0 0 0 236.361 20.821 A 6.858 6.858 0 0 0 233.26 19.273 A 10.027 10.027 0 0 0 231.055 19.043 A 6.679 6.679 0 0 0 226.256 20.973 A 6.556 6.556 0 0 0 224.736 23.129 A 6.221 6.221 0 0 0 224.25 25.594 A 9.811 9.811 0 0 0 224.352 27.038 A 7.461 7.461 0 0 0 224.656 28.324 A 6.791 6.791 0 0 0 225.118 29.397 A 5.137 5.137 0 0 0 225.761 30.33 A 5.911 5.911 0 0 0 227.424 31.65 A 7.646 7.646 0 0 0 229.442 32.399 Q 230.496 32.627 231.69 32.627 A 10.125 10.125 0 0 0 236.971 31.206 L 236.971 33.034 A 11.233 11.233 0 0 1 231.664 34.329 A 12.018 12.018 0 0 1 229.043 34.05 A 10.775 10.775 0 0 1 228.224 33.834 A 9.341 9.341 0 0 1 225.291 32.335 A 6.437 6.437 0 0 1 223.704 30.561 A 8.216 8.216 0 0 1 223.196 29.593 Q 222.422 27.854 222.422 25.594 A 8.195 8.195 0 0 1 223.337 21.72 A 8.419 8.419 0 0 1 224.885 19.653 A 8.335 8.335 0 0 1 230.653 17.223 A 10.974 10.974 0 0 1 231.055 17.215 A 11.85 11.85 0 0 1 233.956 17.552 A 8.513 8.513 0 0 1 237.669 19.513 A 7.552 7.552 0 0 1 240.033 23.91 A 11.029 11.029 0 0 1 240.195 25.848 L 240.195 43.876 L 238.367 43.876 Z M 284.832 17.622 L 283.385 18.739 A 10.689 10.689 0 0 0 279.614 15.717 A 10.81 10.81 0 0 0 274.828 14.626 A 10.535 10.535 0 0 0 267.172 17.75 A 12.777 12.777 0 0 0 267.071 17.85 A 10.57 10.57 0 0 0 263.86 25.453 A 12.631 12.631 0 0 0 263.859 25.594 A 10.567 10.567 0 0 0 266.972 33.237 A 12.899 12.899 0 0 0 267.071 33.338 A 10.536 10.536 0 0 0 274.687 36.562 A 12.725 12.725 0 0 0 274.828 36.563 Q 277.367 36.563 279.627 35.459 A 10.785 10.785 0 0 0 283.41 32.424 L 284.807 33.592 A 12.653 12.653 0 0 1 280.414 37.109 Q 277.799 38.391 274.828 38.391 Q 271.35 38.391 268.404 36.677 Q 265.459 34.963 263.745 32.018 A 12.548 12.548 0 0 1 262.031 25.594 Q 262.031 22.116 263.745 19.17 Q 265.459 16.225 268.404 14.511 A 12.548 12.548 0 0 1 274.828 12.797 Q 277.799 12.797 280.427 14.08 A 12.5 12.5 0 0 1 284.832 17.622 Z M 181.975 20.11 L 181.975 43.876 L 180.147 43.876 L 180.147 18.282 L 194.01 18.282 A 3.944 3.944 0 0 1 195.286 18.481 A 3.416 3.416 0 0 1 196.422 19.132 A 3.037 3.037 0 0 1 197.059 19.872 A 2.491 2.491 0 0 1 197.412 21.176 A 4.898 4.898 0 0 1 197.244 22.523 Q 196.655 24.579 194.01 24.579 L 182.99 24.579 L 182.99 22.751 L 194.01 22.751 A 2.266 2.266 0 0 0 194.633 22.672 Q 195.331 22.472 195.517 21.759 A 2.319 2.319 0 0 0 195.584 21.176 A 0.769 0.769 0 0 0 195.392 20.672 Q 195.304 20.566 195.176 20.471 A 1.695 1.695 0 0 0 195.114 20.427 A 1.852 1.852 0 0 0 194.261 20.123 A 2.354 2.354 0 0 0 194.01 20.11 L 181.975 20.11 Z M 32.678 16.2 L 31.18 17.19 A 9.876 9.876 0 0 0 27.612 13.978 Q 25.416 12.797 22.852 12.797 A 9.676 9.676 0 0 0 15.835 15.651 A 11.702 11.702 0 0 0 15.742 15.743 A 9.676 9.676 0 0 0 12.798 22.722 A 11.692 11.692 0 0 0 12.797 22.852 A 9.676 9.676 0 0 0 15.651 29.869 A 11.702 11.702 0 0 0 15.742 29.961 A 9.676 9.676 0 0 0 22.722 32.906 A 11.692 11.692 0 0 0 22.852 32.907 A 9.814 9.814 0 0 0 27.612 31.713 Q 29.809 30.52 31.18 28.489 L 32.652 29.555 Q 31.027 31.942 28.438 33.338 A 11.587 11.587 0 0 1 22.852 34.735 A 11.598 11.598 0 0 1 18.243 33.795 A 12.004 12.004 0 0 1 14.653 31.457 A 11.498 11.498 0 0 1 14.447 31.256 A 11.933 11.933 0 0 1 11.938 27.529 A 13.522 13.522 0 0 1 11.908 27.46 A 11.598 11.598 0 0 1 10.969 22.852 A 11.598 11.598 0 0 1 11.908 18.244 A 12.004 12.004 0 0 1 14.247 14.653 A 11.498 11.498 0 0 1 14.447 14.448 A 11.933 11.933 0 0 1 18.175 11.938 A 13.522 13.522 0 0 1 18.243 11.909 A 11.598 11.598 0 0 1 22.852 10.969 A 11.554 11.554 0 0 1 28.463 12.378 A 11.808 11.808 0 0 1 32.678 16.2 Z M 92.549 43.876 L 71.424 7.313 L 73.582 7.313 L 94.733 43.876 L 92.549 43.876 Z M 88.283 43.876 L 67.108 7.313 L 69.24 7.313 L 90.416 43.876 L 88.283 43.876 Z M 309.943 25.747 L 320.15 7.313 L 318.119 7.313 L 307.912 25.747 L 317.967 43.876 L 319.998 43.876 L 309.943 25.747 Z M 322.233 25.747 L 332.414 7.313 L 330.383 7.313 L 320.201 25.747 L 330.231 43.876 L 332.262 43.876 L 322.233 25.747 Z M 318.145 25.747 L 328.326 7.313 L 326.295 7.313 L 316.113 25.747 L 326.143 43.876 L 328.174 43.876 L 318.145 25.747 Z M 314.057 25.747 L 324.238 7.313 L 322.207 7.313 L 312.025 25.747 L 322.055 43.876 L 324.086 43.876 L 314.057 25.747 Z M 281.988 19.907 L 280.516 21.024 A 7.403 7.403 0 0 0 278.166 19.056 A 7.13 7.13 0 0 0 274.828 18.282 A 7.034 7.034 0 0 0 269.729 20.361 A 8.56 8.56 0 0 0 269.661 20.427 Q 267.516 22.573 267.516 25.594 A 7.034 7.034 0 0 0 269.595 30.694 A 8.56 8.56 0 0 0 269.661 30.761 Q 271.807 32.907 274.828 32.907 A 7.077 7.077 0 0 0 278.015 32.17 Q 279.5 31.434 280.541 30.139 L 281.963 31.333 A 8.847 8.847 0 0 1 278.815 33.834 Q 276.936 34.735 274.828 34.735 A 8.795 8.795 0 0 1 268.45 32.139 A 10.656 10.656 0 0 1 268.366 32.056 A 8.796 8.796 0 0 1 265.688 25.712 A 10.614 10.614 0 0 1 265.688 25.594 A 8.795 8.795 0 0 1 268.283 19.216 A 10.656 10.656 0 0 1 268.366 19.132 A 8.796 8.796 0 0 1 274.71 16.454 A 10.614 10.614 0 0 1 274.828 16.454 Q 276.961 16.454 278.84 17.38 Q 280.719 18.307 281.988 19.907 Z M 56.215 43.876 L 56.215 7.313 L 58.043 7.313 L 58.043 43.876 L 56.215 43.876 Z M 52.559 43.876 L 52.559 7.313 L 54.387 7.313 L 54.387 43.876 L 52.559 43.876 Z M 48.902 43.876 L 48.902 7.313 L 50.731 7.313 L 50.731 43.876 L 48.902 43.876 Z M 45.246 43.876 L 45.246 7.313 L 47.074 7.313 L 47.074 43.876 L 45.246 43.876 Z M 112.887 7.313 L 112.887 43.876 L 111.059 43.876 L 111.059 7.313 L 112.887 7.313 Z M 109.231 7.313 L 109.231 43.876 L 107.402 43.876 L 107.402 7.313 L 109.231 7.313 Z M 105.574 7.313 L 105.574 43.876 L 103.746 43.876 L 103.746 7.313 L 105.574 7.313 Z M 304.967 43.876 L 304.967 7.313 L 306.795 7.313 L 306.795 43.876 L 304.967 43.876 Z M 301.311 43.876 L 301.311 7.313 L 303.139 7.313 L 303.139 43.876 L 301.311 43.876 Z M 297.654 43.876 L 297.654 7.313 L 299.483 7.313 L 299.483 43.876 L 297.654 43.876 Z M 293.998 43.876 L 293.998 7.313 L 295.826 7.313 L 295.826 43.876 L 293.998 43.876 Z M 66.473 43.876 L 66.473 15.489 L 68.301 18.84 L 68.301 43.876 L 66.473 43.876 Z M 95.317 7.313 L 95.317 35.446 L 93.488 32.348 L 93.488 7.313 L 95.317 7.313 Z M 165.039 3.657 L 137.617 3.657 L 137.617 1.829 L 165.039 1.829 L 165.039 3.657 Z M 165.039 7.313 L 137.617 7.313 L 137.617 5.485 L 165.039 5.485 L 165.039 7.313 Z M 91.66 7.313 L 91.66 29.124 L 89.832 25.797 L 89.832 7.313 L 91.66 7.313 Z M 70.129 43.876 L 70.129 22.065 L 71.957 25.391 L 71.957 43.876 L 70.129 43.876 Z" vector-effect="non-scaling-stroke"/></g></svg>
  </header>
  <h2>Login</h2>
  <form method="post" action="login.php">
    <label for="username">Username</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>

  <p class="error">
  <?php
    if(isset($_GET["notfound"])) echo "User not found.";
    if(isset($_GET["wrongpass"])) echo "Wrong Password.";
  ?>
  </p>

  <p>or</p>
  <a class='btn' href='register.php'>Register</a>
</body>
</html>
