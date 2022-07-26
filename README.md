<br/>

# CISP-PTE

CISP-PTE 考试环境源码

## SQL注入

修改数据库账户密码，自行创建数据库

```sql
create database 2web;
use 2web;

create table article(id int(11) primary key,title varchar(255) null,content varchar(255) null,author varchar(255) null)character set utf8;

insert into article values( '1', 'SQL注入' , '所谓SQL注入，就是通过把SQL命令插入到Web表单提 交或输入域名或页面请求的查询字符串，最终达到欺骗服务器执行恶意的SQL命令', 'admin');
```

![截图](attachment:4a14e2fcda555e06bbd81eac7ca8607f)

<br/>

## 文件上传

<br/>

![截图](attachment:cb4158e93fd36c1ffbbe3baea0011b4b)

![截图](attachment:654c1ca9c8e5c23d975416d12418e6aa)

<br/>

## 文件包含

<br/>

![截图](attachment:a590141f994210683bd14aa39f79cd7c)

<br/>

<br/>

## 命令执行

![截图](attachment:793f0111fa69b0ba0bbd5c088da2e114)

<br/>

<br/>

## 日志分析

<br/>

<br/>

![截图](attachment:004a7a79b82518316d1179194e201f8f)

爆破

![截图](attachment:a7605269189143856ce44a5f487f9518)