

# Soal Case - UAS
### 2402005584 - Welly Yanto


#### Buatlah website yang dapat melakukan simulasi rakit computer:
+ user dapat memilih part masing masing
+ memberi solusi paket paket rakitan computer atau laptop sesuai dengan user
+ pengumpulan data user agar selanjutnya dapat dijadikan sebagai solusi untuk user lain 


### Run Locally

Clone the project
```bash
  git clone https://github.com/wellyct/2402005584_TSCA_COMP6621036.git
```
Go to the project directory
```bash
  cd my-project
```

Install dependencies

```bash
  composer update
  cp .env.example .env
```
Edit file .env, configure parameter to connect to mysql database server

```bash
php artisan key:generate
php artisan migrate:fresh --seed
```
Start the server

```bash
  php artisan serve
```

## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)
