# 🚀 个人主页部署指南

## 📋 部署选项

### 选项 1: 本地预览（最简单）
适合快速查看效果，不需要互联网访问。

```bash
cd /mnt/data2/test

# Python 3
python3 -m http.server 8000

# Node.js http-server
npx http-server -p 8000

# 访问
# http://localhost:8000
```

---

### 选项 2: 内网访问（适合局域网）
让同一网络的其他设备访问你的网站。

```bash
cd /mnt/data2/test

# 启动服务器，监听所有网络接口
python3 -m http.server 8000 --bind 0.0.0.0

# 在同一网络的其他设备访问：
# http://服务器IP:8000
# 例如：http://192.168.1.100:8000
```

**查看服务器 IP：**
```bash
ip addr show | grep "inet " | grep -v 127.0.0.1
```

---

### 选项 3: 公网访问（隧道代理）
无需配置服务器，通过临时域名从公网访问。

#### 方法 A: ngrok（推荐）
```bash
# 安装 ngrok
curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null
echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list
sudo apt update && sudo apt install ngrok

# 使用免费隧道
cd /mnt/data2/test
python3 -m http.server 8000 &
ngrok http 8000

# 访问 ngrok 提供的临时域名，例如：
# https://abc123.ngrok.io
```

#### 方法 B: Cloudflare Tunnel（免费且稳定）
```bash
# 下载 cloudflared
wget https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb
sudo dpkg -i cloudflared-linux-amd64.deb

# 访问 Cloudflare 获取 token
cloudflared tunnel login

# 创建隧道
cloudflared tunnel create my-website

# 运行隧道
cd /mnt/data2/test && python3 -m http.server 8000 &
cloudflared tunnel --url http://localhost:8000 my-website
```

#### 方法 C: ssh -L 端口转发
从你的电脑连接到服务器时映射端口：
```bash
# 在你的本地电脑运行
ssh -L 8000:localhost:8000 username@your-server-ip

# 然后在本地浏览器访问
# http://localhost:8000
```

---

### 选项 4: 云平台托管（适合生产环境）
永久免费，专业域名。

#### A. GitHub Pages（推荐）
```bash
cd /mnt/data2/test
git init
git add .
git commit -m "Add personal website"

# 推送到 GitHub
# 1. 在 GitHub 创建新仓库
# 2. 关联远程仓库
git remote add origin https://github.com/你的用户名/仓库名.git
git push -u origin main

# 3. 在 GitHub 上开启 Pages
# Settings → Pages → Source: main branch → Save

# 访问：https://你的用户名.github.io/仓库名/
```

#### B. Netlify（免费，拖拽部署）
```bash
# 方法 1：拖拽文件夹
# 1. 访问 https://app.netlify.com/drop
# 2. 将 /mnt/data2/test 整个文件夹拖拽到网页

# 方法 2：使用 CLI
npm install -g netlify-cli
cd /mnt/data2/test
netlify deploy --prod

# 访问：https://随机名.netlify.app
```

#### C. Vercel（免费，自动部署）
```bash
npm install -g vercel
cd /mnt/data2/test
vercel

# 访问：https://随机名.vercel.app
```

#### D. Surge.sh（超简单）
```bash
npm install -g surge
cd /mnt/data2/test
surge

# 输入域名或按回车使用默认随机域名
# 访问：https://随机名.surge.sh
```

---

### 选项 5: 传统 Web 服务器
如果你有服务器权限，使用 Nginx/Apache。

#### Nginx 配置
```bash
# 安装 Nginx
sudo apt update
sudo apt install nginx

# 复制文件到 web 目录
sudo cp -r /mnt/data2/test/* /var/www/html/

# 重启 Nginx
sudo systemctl restart nginx

# 访问：http://服务器IP 或 http://你的域名
```

#### Apache 配置
```bash
# 安装 Apache
sudo apt update
sudo apt install apache2

# 复制文件
sudo cp -r /mnt/data2/test/* /var/www/html/

# 重启 Apache
sudo systemctl restart apache2

# 访问：http://服务器IP
```

---

## 📊 部署方案对比

| 方案 | 成本 | 域名 | 复杂度 | 适用场景 |
|------|------|------|--------|---------|
| 本地预览 | 免费 | localhost | ⭐ | 开发测试 |
| 内网访问 | 免费 | 局域网IP | ⭐⭐ | 局域网共享 |
| ngrok | 免费 | 临时域名 | ⭐⭐ | 演示分享 |
| Cloudflare Tunnel | 免费 | 自定义域名 | ⭐⭐⭐ | 稳定公网访问 |
| GitHub Pages | 免费 | *.github.io | ⭐⭐ | 个人项目 |
| Netlify | 免费 | *.netlify.app | ⭐ | 快速部署 |
| Vercel | 免费 | *.vercel.app | ⭐ | 专业项目 |
| Nginx/Apache | $ | 自定义域名 | ⭐⭐⭐⭐ | 生产服务器 |

---

## 🎯 推荐选择

**快速测试：** 选项 1（本地预览）
**分享给朋友：** 选项 3（ngrok 隧道）
**永久网站：** 选项 4（GitHub Pages 或 Netlify）
**专业生产：** 选项 4 + 自定义域名

---

## 🔥 立即开始

**最快方式（免费 + 公网访问）：**
```bash
cd /mnt/data2/test
python3 -m http.server 8000 &
curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null
echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list
sudo apt update && sudo apt install -y ngrok
ngrok http 8000
```

**复制 ngrok 显示的临时域名，即可从任何地方访问！**

---

需要我帮你执行某个部署方案吗？
