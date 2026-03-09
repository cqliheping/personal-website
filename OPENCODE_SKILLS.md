# 🎯 适合驱动 opencode 的 Skills 完整指南

## 📋 opencode 内置技能（已安装）

opencode 1.2.20 已经内置以下技能，无需安装：

### 开发与编码
- ✅ **skill-creator** - 创建和改进技能
- ✅ **mcp-builder** - MCP 服务器开发
- ✅ **find-skills** - 发现和安装技能

### Web 开发
- ✅ **webapp-testing** - Playwright Web 应用测试
- ✅ **web-artifacts-builder** - React + Tailwind + shadcn/ui 工件构建
- ✅ **frontend-design** - 生产级前端界面设计

### 文档处理
- ✅ **xlsx** - Excel 文件读写和分析
- ✅ **pptx** - PowerPoint 演示文稿
- ✅ **pdf** - PDF 处理（创建、编辑、提取）
- ✅ **docx** - Word 文档创建和编辑
- ✅ **doc-coauthoring** - 文档协同写作工作流
- ✅ **internal-comms** - 内部通信模板

### 设计与多媒体
- ✅ **theme-factory** - 10 个预设主题系统
- ✅ **slack-gif-creator** - Slack 动画 GIF 创建

---

## 🚀 推荐安装的外部技能（Google Labs 系列）

这些技能来自 Google Labs，专为 AI 编码设计，与 opencode 配合极佳：

### 核心开发技能 ⭐ 强烈推荐

**1. React Components** (13,200+ 安装)
```bash
npx skills add google-labs-code/stitch-skills@react:components -g -y
```
- 生成高质量 React 组件
- 包含最佳实践和现代模式
- 可与 opencode 配合快速构建 React 应用

**2. Shadcn UI** (9,500+ 安装)
```bash
npx skills add google-labs-code/stitch-skills@shadcn-ui -g -y
```
- 生成专业设计系统和 UI 组件库
- 可复用性强，架构优雅
- 提升前端开发效率

**3. Enhance Prompt** (10,800+ 安装)
```bash
npx skills add google-labs-code/stitch-skills@enhance-prompt -g -y
```
- 优化给 opencode 的提示词
- 提高代码生成质量和准确性
- 减少沟通成本

**4. Stitch Loop** (11,300+ 安装)
```bash
npx skills add google-labs-code/stitch-skills@stitch-loop -g -y
```
- 自动化代码迭代和优化
- 持续改进代码质量
- 适合长期项目维护

**5. Design MD** (12,800+ 安装)
```bash
npx skills add google-labs-code/stitch-skills@design-md -g -y
```
- 将设计想法转换为代码
- 快速原型开发
- 设计稿到代码转换

### Git 与 GitHub (热门技能)

**6. Git Commit** (11,600+ 安装) ⭐ 最热门
```bash
npx skills add github/awesome-copilot@git-commit -g -y
```
- 自动生成规范的 Git commit 消息
- GitHub Pages 部署必备
- 符合 Conventional Commits 规范

**7. Create Pull Request** (170 安装)
```bash
npx skills add cline/cline@create-pull-request -g -y
```
- 自动创建规范的 PR
- 生成变更说明和代码差异
- 协作开发必备

### 测试与质量

**8. Playwright Testing** (358 安装)
```bash
npx skills add testdino-hq/playwright-skill@playwright-skill -g -y
```
- 自动化 E2E 测试
- 与 opencode 生成的代码配合测试
- 保证代码质量

**9. Code Review** (93 安装)
```bash
npx skills add proffesor-for-testing/agentic-qe@code-review-quality -g -y
```
- opencode 代码质量审查
- 自动检测问题和改进建议

### React 框架 (来自 frontend/ai)

**10. React Component Generator** (5 安装)
```bash
npx skills add frontend/ai@tt-generate-component -g -y
```
- 生成单个 React 组件
- 快速开发 UI 功能

---

## 🎯 OpenCode 专属工作流

**11. OpenCode Workflows - PowerPoint** (205 安装)
```bash
npx skills add igorwarzocha/opencode-workflows@powerpoint -g -y
```
- 🎯 **专为 opencode 设计**
- 使用 opencode 生成 PowerPoint 演示文稿
- 扩展为其他文档生成

---

## 📊 技能推荐矩阵

| 技能类别 | 技能名称 | 安装数 | opencode 适用性 | 推荐指数 | 安装状态 |
|---------|---------|--------|--------------|---------|---------|
| 🚀 核心开发 | React Components | 13.2K | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | 待安装 |
| 🎨 UI/设计 | Shadcn UI | 9.5K | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | 待安装 |
| 🔍 Git | Git Commit | 11.6K | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | 待安装 |
| 🎯 opencode | OpenCode Workflows | 205 | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | 待安装 |
| 🧪 测试 | Playwright | 358 | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ | 待安装 |
| 🎨 前端 | frontend-design | 已安装 | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | ✅ 内置 |
| 📝 文档 | docx | 已安装 | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ✅ 内置 |
| 🎨 设计 | theme-factory | 已安装 | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | ✅ 内置 |
| 🧪 测试 | webapp-testing | 已安装 | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ✅ 内置 |

---

## 🏆 最佳组合建议

### 前端开发组合（最推荐）
```bash
npx skills add google-labs-code/stitch-skills@react:components -g -y
npx skills add google-labs-code/stitch-skills@shadcn-ui -g -y
npx skills add google-labs-code/stitch-skills@enhance-prompt -g -y
```

**原因：**
- React Components 提供高质量组件生成
- Shadcn UI 提供专业设计系统
- Enhance Prompt 优化提示词，提高输出质量

### 全栈开发组合
```bash
npx skills add google-labs-code/stitch-skills@react:components -g -y
npx skills add testdino-hq/playwright-skill@playwright-skill -g -y
npx skills add github/awesome-copilot@git-commit -g -y
```

**原因：**
- React 组件生成 + 自动化测试 + Git 规范提交

### Git 协作组合
```bash
npx skills add github/awesome-copilot@git-commit -g -y
npx skills add cline/cline@create-pull-request -g -y
```

**原因：**
- 规范 commit 消息 + 自动创建 PR

---

## 🔥 强烈推荐优先安装

### 最值得安装的 3 个技能：

1. **React Components** - 最常用的开发技能
2. **Shadcn UI** - 专业设计系统
3. **Git Commit** - GitHub Pages 部署必备（最热门，11.6K 安装）

这三个组合可以覆盖 80% 的 opencode 使用场景。

---

## ✅ 立即安装命令

批量安装最推荐的 3 个：
```bash
npx skills add google-labs-code/stitch-skills@react:components -g -y && \
npx skills add google-labs-code/stitch-skills@shadcn-ui -g -y && \
npx skills add github/awesome-copilot@git-commit -g -y
```

或者一个一个手动安装。

---

## 📚 更多技能探索

如果你想查找更多技能：
```bash
# 搜索特定领域
npx skills find [关键词]

# 例如：
npx skills find react
npx skills find deployment
npx skills find testing
```

浏览所有技能：
https://skills.sh/

---

需要我帮你批量安装这些技能吗？
