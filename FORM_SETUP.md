# 📬 联系表单功能配置

## 默认情况（当前状态）

**❌ 只能演示，不真正发送消息**
- 表单提交仅在浏览器端模拟
- 消息不会发送到任何地方
- 适合查看页面效果

---

## ✅ 方案 1: 使用 Formspree（推荐，最简单）

**特点：**
- ✅ 免费额度：每月 50 条消息
- ✅ 不需要后端代码
- ✅ 消息发送到你的邮箱
- ✅ 支持文件上传

**配置步骤：**

1. **注册 Formspree**
   - 访问：https://formspree.io/
   - 用邮箱注册（免费）

2. **创建新表单**
   - 点击 "New Form"
   - 输入表单名称（如：Contact Form）
   - 系统会生成一个表单 ID（如：`xqkzazqy`）

3. **修改 index.html**

   找到 `<form>` 标签，添加 `action` 和 `method`：
   ```html
   <form id="contactForm" action="https://formspree.io/f/你的表单ID" method="POST">
       <!-- 表单内容保持不变 -->
   </form>
   ```

4. **修改 script.js**

   将 `initContactForm()` 函数改为：
   ```javascript
   function initContactForm() {
       const form = document.getElementById('contactForm');
       const formSuccess = document.getElementById('formSuccess');

       form.addEventListener('submit', (e) => {
           // 不阻止默认提交，让 Formspree 处理
           if (validateForm()) {
               const submitBtn = form.querySelector('.btn-submit');
               submitBtn.innerHTML = '<span>发送中...</span>';
               submitBtn.disabled = true;
               // Formspree 会自动处理并显示成功消息
           }
       });
   }
   ```

5. **测试**
   - 填写表单并提交
   - 检查你的邮箱，应该会收到消息

---

## ✅ 方案 2: 使用 Netlify Forms（免费）

**特点：**
- ✅ 完全免费，无限制
- ✅ 需要部署到 Netlify
- ✅ 消息显示在 Netlify 控制台

**配置步骤：**

1. **部署到 Netlify**
   ```bash
   cd /mnt/data2/test
   # 登录 Netlify
   npx netlify login

   # 部署
   npx netlify deploy --prod
   ```

2. **配置表单处理器**

   在 `index.html` 中修改表单：
   ```html
   <form id="contactForm" name="contact" method="POST" data-netlify="true">
       <!-- 添加隐藏字段 -->
       <input type="hidden" name="form-name" value="contact">

       <!-- 其他表单字段保持不变 -->
   </form>
   ```

3. **查看消息**
   - 登录 Netlify 控制台
   - Site → Forms → contact
   - 可以查看所有提交的消息

---

## ✅ 方案 3: 使用 EmailJS（免费）

**特点：**
- ✅ 免费版限制：每月 200 条
- ✅ 完全客户端处理
- ✅ 高度自定义

**配置步骤：**

1. **注册 EmailJS**
   - 访问：https://www.emailjs.com/
   - 创建免费账户

2. **设置邮件服务**
   - 连接你的邮箱（Gmail 等）
   - 创建邮件模板

3. **修改 script.js**

   添加 EmailJS 发送功能：
   ```javascript
   // 在 script.js 顶部添加
   emailjs.init("你的公钥");

   function initContactForm() {
       const form = document.getElementById('contactForm');
       const formSuccess = document.getElementById('formSuccess');

       form.addEventListener('submit', (e) => {
           e.preventDefault();

           if (validateForm()) {
               const submitBtn = form.querySelector('.btn-submit');
               submitBtn.innerHTML = '<span>发送中...</span>';
               submitBtn.disabled = true;

               const templateParams = {
                   from_name: document.getElementById('name').value,
                   reply_to: document.getElementById('email').value,
                   message: document.getElementById('message').value
               };

               emailjs.send('你的服务ID', '你的模板ID', templateParams)
                   .then(() => {
                       form.reset();
                       submitBtn.innerHTML = '发送消息';
                       submitBtn.disabled = false;
                       formSuccess.classList.add('show');
                       setTimeout(() => formSuccess.classList.remove('show'), 3000);
                   }, (error) => {
                       alert('发送失败，请稍后重试');
                       submitBtn.innerHTML = '发送消息';
                       submitBtn.disabled = false;
                   });
           }
       });
   }
   ```

---

## ✅ 方案 4: 简单的本地存储（仅供演示）

如果只是想看到消息存储在本地，可以用 localStorage：

**修改 script.js：**

```javascript
function initContactForm() {
    const form = document.getElementById('contactForm');
    const formSuccess = document.getElementById('formSuccess');

    // 加载历史消息
    loadMessages();

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        if (validateForm()) {
            const submitBtn = form.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<span>发送中...</span>';
            submitBtn.disabled = true;

            // 保存消息到 localStorage
            const message = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value,
                timestamp: new Date().toLocaleString()
            };

            // 保存到本地存储
            let messages = JSON.parse(localStorage.getItem('contactMessages') || '[]');
            messages.push(message);
            localStorage.setItem('contactMessages', JSON.stringify(messages));

            // 显示成功消息
            setTimeout(() => {
                form.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                formSuccess.classList.add('show');

                // 显示收到的新消息
                loadMessages();

                setTimeout(() => formSuccess.classList.remove('show'), 3000);
            }, 1500);
        }
    });
}

// 显示消息列表
function loadMessages() {
    let messages = JSON.parse(localStorage.getItem('contactMessages') || '[]');
    console.log('收到的消息：', messages);
}
```

**查看消息：**

```bash
# 方法 1: 在浏览器控制台查看
# 按 F12 打开开发者工具
# 在 Console 控制台输入：
console.log(JSON.parse(localStorage.getItem('contactMessages')));

# 方法 2: 显示消息计数提醒
```

在页面底部添加消息计数显示：
```html
<div id="messageCount" style="position: fixed; bottom: 20px; left: 20px; background: #333; color: white; padding: 10px; border-radius: 5px; z-index: 1000;">
    已收到 0 条消息
</div>
```

在脚本中更新计数：
```javascript
function loadMessages() {
    let messages = JSON.parse(localStorage.getItem('contactMessages') || '[]');
    const countDiv = document.getElementById('messageCount');
    countDiv.textContent = `已收到 ${messages.length} 条消息`;
}
```

---

## 🎯 推荐方案

| 需求 | 推荐方案 |
|------|---------|
| **真正收到邮件** | 方案 1（Formspree） |
| **免费 + 限制少** | 方案 2（Netlify Forms） |
| **高度自定义** | 方案 3（EmailJS） |
| **仅测试/演示** | 方案 4（localStorage） |
| **当前状态** | 只能演示，不发送 ❌ |

---

## 📊 方案对比

| 方案 | 成本 | 复杂度 | 收到邮件 | 数据持久化 |
|------|------|--------|----------|------------|
| Formspree | 免费/付费 | ⭐⭐ | ✅ | ✅ |
| Netlify | 免费 | ⭐⭐ | ❌（控制台） | ✅ |
| EmailJS | 免费/付费 | ⭐⭐⭐ | ✅ | ✅ |
| localStorage | 免费 | ⭐ | ❌ | ❌（浏览器） |

---

需要我帮你配置哪个方案？
