# 📦 OpenClaw 默认安装的 Skills

## 📊 总览

OpenClaw 自带了 **52 个默认 skills**，这些技能在安装时已经内置，无需额外安装。

---

## 📝 通过 Skills CLI 安装的

### 全局安装（-g）
- **find-skills** - 帮助发现和安装其他技能

### 项目级别安装（你安装的）
- **self-improving** (v1.2.10) - 自我反思和改善能力（你刚才通过 clawhub 安装）

---

## 🧩 OpenClaw 内置的 52 个默认 Skills

这些技能是 OpenClaw 安装时自带的，按功能分类：

### 🔐 安全与认证
- **1password** - 1Password 密码管理
- **apple-notes** - Apple Notes 笔记同步
- **apple-reminders** - Apple Reminders 提醒事项

### 📱 通讯与消息
- **discord** - Discord 消息和频道交互
- **slack** - Slack 工作空间和消息
- **voice-call** - 语音通话功能
- **wacli** - WhatsApp CLI 交互工具

### 🎵 音频与媒体
- **goplaces** - 音乐和音频处理
- **spotify-player** - Spotify 音乐播放器
- **sag** - ElevenLabs 文字转语音 (TTS)
- **sherpa-onnx-tts** - 本地 TTS 引擎

### 📄 文档与笔记
- **bear-notes** - Bear 笔记应用
- **notion** - Notion 笔记和数据库
- **obsidian** - Obsidian Markdown 笔记
- **summarize** - 文档内容总结

### 📧 邮件
- **himalaya** - 邮件客户端（Terminal 邮件）
- **imsg** - iMessage 消息处理

### 🌐 网络与API
- **gemini** - Gemini AI Q&A 和生成
- **gh-issues** - GitHub Issues 管理
- **github** - GitHub 仓库和Pull Request
- **blogwatcher** - 博客和内容监控

### 🖼️ 图片与视频
- **canvas** - Canvas 画布和图像处理
- **camsnap** - 摄像头截图
- **gifgrep** - GIF 搜索和处理
- **nano-pdf** - PDF 文档处理
- **openai-image-gen** - OpenAI 图像生成 (DALL-E)
- **video-frames** - 视频帧提取

### 🎤 音频处理
- **openai-whisper** - OpenAI Whisper 语音转文字
- **openai-whisper-api** - Whisper API 版本
- **songsee** - 音频识别和处理

### 🏠 智能家居
- **bluebubbles** - BlueBubbles 消息网关
- **openhue** - Philips Hue 智能灯光
- **sonoscli** - Sonos 音响控制

### 🎮 游戏与应用
- **gog** - Good Old Games (GOG) 平台
- **mcporter** - Minecraft 服务器端口
- **oracle** - Oracle 数据库工具
- **ordercli** - 订餐和服务订购
- **trello** - Trello 项目管理

### 🛠️ 开发工具
- **clawhub** - OpenClaw 技能仓库
- **coding-agent** - 代码生成和审查
- **skill-creator** - 创建和打包自定义技能
- **github** - Git 和 GitHub 集成

### 📊 监控与日志
- **model-usage** - 模型使用统计和成本
- **session-logs** - 会话日志查看和分析

### 🔧 系统工具
- **blucli** - 蓝牙设备管理
- **eightctl** - Eight 设备控制
- **healthcheck** - 系统安全和健康检查
- **nano-banana-pro** - 系统监控工具
- **tmux** - Tmux 会话管理
- **xurl** - URL 处理和解析

### 🔍 搜索与发现
- **find-skills** - 技能搜索和安装

### 🔔 提醒与通知
- **peekaboo** - 隐私和监控工具

### 🧩 其他工具
- **canvas** - Canvas 图形处理
- **oracle** - Oracle 数据库或预测工具

---

## 📊 统计数据

| 分类 | 数量 |
|------|------|
| **安全与认证** | 3 |
| **通讯与消息** | 4 |
| **音频与媒体** | 4 |
| **文档与笔记** | 4 |
| **邮件** | 2 |
| **网络与API** | 4 |
| **图片与视频** | 6 |
| **音频处理** | 3 |
| **智能家居** | 3 |
| **游戏与应用** | 4 |
| **开发工具** | 4 |
| **监控与日志** | 2 |
| **系统工具** | 5 |
| **搜索与发现** | 1 |
| **提醒与通知** | 1 |
| **其他工具** | 2 |
| **总计** | **52** |

---

## 🎯 如何使用

### 查看已安装的技能
```bash
# 本地（项目）技能
npx skills list

# 全局技能
npx skills list -g
```

### 使用特定技能
**方法 1：提到相关话题时自动激活**
例如：
- "检查服务器安全" → 自动使用 `healthcheck`
- "搜索技能" → 自动使用 `find-skills`

**方法 2：显式调用**
在对话中明确提到技能名称或相关场景。

---

## 📂 技能目录位置

```
~/.nvm/versions/node/v22.22.1/lib/node_modules/openclaw/skills/
├── 1password/
├── apple-notes/
├── healthcheck/
├── clawhub/
├── coding-agent/
├── gemini/
├── discord/
├── skill-creator/
├── tmux/
├── weather/
└── ... (共 52 个)
```

---

## 💡 推荐重点技能

### 👑 最常用

1. **healthcheck** - 系统安全检查 ⭐
2. **find-skills** - 技能发现和搜索 ⭐
3. **gemini** - AI 辅助 Q&A ⭐
4. **coding-agent** - 代码生成 ⭐
5. **skill-creator** - 创建自定义技能 ⭐

### 🎨 多媒体

1. **sag** - 文字转语音
2. **openai-image-gen** - AI 图片生成
3. **openai-whisper** - 语音转文字

### 🤝 集成工具

1. **github** - GitHub 集成
2. **discord** / **slack** - 消息平台
3. **notion** / **obsidian** - 笔记工具

### 🔧 实用工具

1. **tmux** - 会话管理
2. **weather** - 天气查询
3. **model-usage** - 使用统计

---

## 📝 备注

- 这些都是 **内置技能**，不需要通过 clawhub 或 npx skills add 安装
- **额外安装的技能**：`self-improving` (1.2.10) 和任何通过 `npx skills add` 安装的技能
- 每个技能都有自己的 SKILL.md 文件，包含详细说明

---

完整列表共 **52 个内置技能** + **1 个额外安装** = **53 个可用技能**！🚀
