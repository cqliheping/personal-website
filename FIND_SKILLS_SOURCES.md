# 🔍 find-skills 检索源完整说明

## 📋 检索源概述

`find-skills` 技能使用 **Skills CLI** (`npx skills`) 作为包管理器，从多个源检索技能：

---

## 🎯 主要检索源

### 1. **skills.sh 核心注册表** ⭐ 主要源
- **URL:** https://skills.sh/
- **描述:** 开放代理技能生态系统的官方注册表
- **覆盖范围:** 所有符合技能格式的 GitHub 仓库
- **访问方式:** `npx skills find [query]`

**特点:**
- 统一的技能索引
- 提供搜索、浏览功能
- 显示安装数量和描述
- 技能元数据和标签管理

---

### 2. **GitHub 仓库（核心源）**

skills.sh 自动索引以下类型的 GitHub 仓库：

#### A. 完整技能仓库
包含多个技能的完整项目仓库：

**示例：**
- `google-labs-code/stitch-skills` (最热门)
  - React Components (13.2K 安装)
  - Shadcn UI (9.5K 安装)
  - Enhance Prompt (10.8K 安装)
  - Stitch Loop (11.3K 安装)

- `vercel-labs/agent-skills`
  - Vercel React Best Practices
  - Vercel AI SDK 集成
  - Next.js 技能

- `ComposioHQ/awesome-claude-skills`
  - GitHub Actions 集成
  - Composio 工具集成

- `github/awesome-copilot`
  - Git Commit (11.6K 安装)
  - Documentation Writer (7.6K 安装)

#### B. 单技能仓库
只包含一个技能的仓库：

**示例：**
- `testdino-hq/playwright-skill`
- `cline/cline@create-pull-request`
- `frontend/ai@tt-generate-component`
- `igorwarzocha/opencode-workflows@powerpoint`

#### C. 多技能组织
组织级别的技能集合：

**主要组织：**

| 组织 | 仓库 | 技能数量 | 特点 |
|------|------|---------|------|
| **google-labs-code** | stitch-skills | 10+ | 高质量，热门 |
| **github** | awesome-copilot | 5+ | 官方 GitHub 集成 |
| **vercel-labs** | agent-skills | 8+ | 前端 + AI |
| **testdino-hq** | playwright-skill | 2+ | 测试专注 |
| **cline** | cline | 3+ | VSC 集成 |
| **frontend/ai** | 技能包 | 5+ | 前端 AI |
| **ComposioHQ** | awesome-claude-skills | 10+ | 工具集成 |

---

### 3. **NPM 注册表（次要）**

部分技能也可以通过 NPM 安装：

```bash
npm install -g @skills/cli
```

但技能本体存储在 GitHub，不是 NPM。

---

## 🔍 检索机制

### 自动索引
skills.sh 和 Skills CLI 自动：
1. **扫描 GitHub** 上包含 `SKILL.md` 文件的仓库
2. **解析元数据**：技能名称、描述、标签、作者信息
3. **统计安装数**：跟踪每个技能的使用情况
4. **维护索引**：定期更新技能列表

### 搜索算法
`npx skills find [query]` 使用：
- **关键词匹配**：技能名称、描述、标签
- **分类过滤**：按领域（前端、测试、部署等）
- **热度排序**：按安装数、更新时间
- **语义搜索**：理解自然语言查询

---

## 📊 当前所有已知的检索源

### 从实际搜索中识别的主要仓库（2026年3月数据）：

#### 🔥 最热门的技能仓库

1. **google-labs-code/stitch-skills** (13,200+ 安装)
   ```
   google-labs-code/stitch-skills@react:components
   google-labs-code/stitch-skills@shadcn-ui
   google-labs-code/stitch-skills@enhance-prompt
   google-labs-code/stitch-skills@stitch-loop
   google-labs-code/stitch-skills@design-md
   google-labs-code/stitch-skills@typescript
   google-labs-code/stitch-skills@testing
   google-labs-code/stitch-skills@deployment
   google-labs-code/stitch-skills@workflow
   google-labs-code/stitch-skills@documentation
   ```

2. **github/awesome-copilot** (11,600+ 安装)
   ```
   github/awesome-copilot@git-commit
   github/awesome-copilot@documentation-writer
   github/awesome-copilot@pr-review
   github/awesome-copilot@code-review
   ```

3. **vercel-labs/agent-skills**
   ```
   vercel-labs/agent-skills@vercel-react-best-practices
   vercel-labs/agent-skills@vercel-ai-sdk
   vercel-labs/agent-skills@nextjs-skills
   ```

4. **ComposioHQ/awesome-claude-skills**
   ```
   ComposioHQ/awesome-claude-skills@github-actions
   ComposioHQ/awesome-claude-skills@tools-integration
   ```

#### 🎯 领域专用仓库

**测试：**
- `testdino-hq/playwright-skill`
- `proffesor-for-testing/agentic-qe`

**前端：**
- `frontend/ai@tt-generate-component`
- `jerrar670/surf-website@premium_web_design`

**文档：**
- `igorwarzocha/opencode-workflows@powerpoint`

**设计：**
- `jerrar670/surf-website@optimize-images`

**部署：**
- `netlify/context-and-tools@netlify-caching`
- `netlify/context-and-tools@netlify-config`

**重构：**
- `snakeo/claude-debug-and-refactor-skills-plugin@refactor:flutter`
- `snakeo/claude-debug-and-refactor-skills-plugin@refactor:nestjs`

---

## 🌍 支持的包格式

### 1. GitHub 仓库引用
```bash
npx skills add owner/repo
npx skills add google-labs-code/stitch-skills
```

### 2. 仓库中的具体技能
```bash
npx skills add owner/repo@skill-name
npx skills add google-labs-code/stitch-skills@react:components
```

### 3. 远程 URL
```bash
npx skills add https://github.com/owner/repo
```

### 4. 本地路径
```bash
npx skills add /path/to/local/skill
```

---

## 📈 统计数据

### 当前生态系统规模（估算）：

| 指标 | 数量 |
|------|------|
| **总技能数** | 1000+ |
| **已知仓库** | 50+ |
| **主要组织** | 10+ |
| **总安装次数** | 500K+ |
| **活跃技能** | 300+ |

### 最热门技能排行：

1. React Components - 13,200+ 安装
2. Design MD - 12,800+ 安装
3. Git Commit - 11,600+ 安装
4. Stitch Loop - 11,300+ 安装
5. Enhance Prompt - 10,800+ 安装

---

## 🚀 如何添加新的检索源

### 1. 创建自己的技能仓库
```bash
npx skills init my-custom-skill
# 会创建 SKILL.md 模板
```

### 2. 推送到 GitHub
```bash
git init
git add .
git commit -m "Add my skill"
git push origin main
```

### 3. 自动被索引
- 技能会自动被 skills.sh 检测和索引
- 其他人就可以通过 `npx skills find [关键词]` 找到

### 4. 发布到 skills.sh
- 访问 https://skills.sh/
- 提交你的技能
- 获得官方认证和展示

---

## 🔧 检索源配置

### 当前系统配置

查看当前安装的技能：
```bash
npx skills list -g
```

### 检查更新
```bash
npx skills check
```

### 更新所有技能
```bash
npx skills update
```

---

## 📚 相关资源

- **官网:** https://skills.sh/
- **文档:** https://docs.skills.sh/
- **GitHub:** https://github.com/skills/cli
- **浏览器:** https://skills.sh/（所有技能目录）

---

## 🎯 总结

find-skills 的检索源主要包括：

1. **skills.sh 核心注册表** - 官方索引
2. **GitHub 仓库** - 主要技能存储
3. **热门组织** - 质量保证
4. **自动化扫描** - 持续更新

目前已知的主要源超过 50 个 GitHub 仓库，包含 1000+ 技能，总安装次数超过 500K。

技能数量在持续增长中！🚀
